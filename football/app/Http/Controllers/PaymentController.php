<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Payment;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment::query();
        $role = session('role');
        $data = $data->orderBy('id', 'DESC');
        if ($role == 1) {
            $data = $data->get();
        } elseif ($role == 3) {
            $data = $data->where('customer_id', Auth::id())->get();
        } else {
            $data = $data->where('user_id', Auth::id())->get();
        }
        $countPayment = $data->count();
        return view('payment.index', ['data' => $data, 'countPayment' => $countPayment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = Orders::find($request['orderId']);
        $count = Payment::get()->count() + 1;

        return view('payment.edit')->with([
            'order' => $order,
            'count' => $count
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $order = Orders::find($id);
        $paymentData = [
            'user_id' => $order->user_id,
            'order_id' => $id,
            'customer_id' => Auth::id(),
            'amount' => $order->amount,
            'status' => 0,
            'title' => $order->title
        ];
        $payment = Payment::create($paymentData);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $payments = Payment::find($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus($id)
    {
        $payment = Payment::find($id);
        $user = Users::find($payment->user_id);
        $coin = $user->coin;
        if ($payment->status == 0) {
            $payment->status = 1;
            $user->coin = $coin + $payment->amount;
        } else {
            $payment->status = 0;
            $user->coin = $coin - $payment->amount;
        }
        $user->save();
        $payment->save();
        return back();
    }

    public function vn_payment(Request $request)
    {
        $order = Orders::find($request['order-id']);
        $paymentData = [
            'user_id' => $order->user_id,
            'order_id' => $request['order-id'],
            'customer_id' => Auth::id(),
            'amount' => $order->amount,
            'status' => 1,
            'title' => $order->title,
            'type' => 2
        ];
        $payment = Payment::create($paymentData);
        //payment
        $index = rand(0000,9999);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('payment_index');
        $vnp_TmnCode = "1OYWHLYH";//Mã website tại VNPAY
        $vnp_HashSecret = "AOHCXXTJOEFXJVOSFTOLSXEJOQGQUKSC"; //Chuỗi bí mật

        $vnp_TxnRef = $index; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán sân '.$request['name'];
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $order->amount * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
//        $vnp_ExpireDate = $_POST['txtexpire'];
//Billing
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    public function updateStatus(){

    }
}
