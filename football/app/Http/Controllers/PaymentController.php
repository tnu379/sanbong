<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Payment;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if($role == 1){
            $data = $data->get();
        } elseif ($role == 3){
            $data = $data->where('customer_id', Auth::id())->get();
        }
        else{
            $data = $data->where('user_id', Auth::id())->get();
        }
        $countPayment = $data->count();
        return view('payment.index',['data' => $data, 'countPayment' => $countPayment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = Orders::find($request['orderId']);
        $count =  Payment::get()->count() + 1;

        return view('payment.edit')->with([
            'order' => $order,
            'count' => $count
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $order = Orders::find($id);
        $paymentData = [
            'user_id' => $order->user_id,
            'order_id' => $id,
            'customer_id' => Auth::id(),
            'amount'=> $order->amount,
            'status' => 0,
            'title' => $order->title
        ];
        $payment = Payment::create($paymentData);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $payments = Payment::find($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus($id){
        $payment = Payment::find($id);
        $user = Users::find($payment->user_id);
        $coin =  $user->coin;
        if($payment->status == 0){
            $payment->status = 1 ;
            $user->coin = $coin + $payment->amount;
        }
        else{
            $payment->status = 0 ;
            $user->coin = $coin - $payment->amount;
        }
        $user->save();
        $payment->save();
        return back();
    }
}
