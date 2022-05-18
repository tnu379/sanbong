<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Times;
use App\Models\Users;
use App\Models\Yard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Config::get('app.app-football.time');
        $sizes = Config::get('app.app-football.size');
        $prices = Config::get('app.app-football.price');
        $orders = Orders::get()->where('user_id', Auth::id());
        return view('orders.index', [
            'times' => $times,
            'orders' => $orders,
            'sizes' => $sizes,
            'prices' => $prices,
            'count_order' => $orders->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(1);
    }

    public function booking($id, Request $request)
    {
        return view('orders.booking', ['id' => $id]);
    }

    public function getEvents($id, Request $request)
    {
        $data = Orders::whereDate('start', '>=', $request->start)
            ->whereDate('end', '<=', $request->end)
            ->where('yard_id', $id)
            ->get(['id', 'title', 'start', 'end']);
        return response()->json($data);
    }

    public function vendorBooking(Request $request)
    {
        $user = Users::where('id', Auth::id())->first();
        $times = Config::get('app.app-football.time');
        $sizes = Config::get('app.app-football.size');
        $prices = Config::get('app.app-football.price');
        return view('orders.vendor_booking',
            [
                'user' => $user,
                'sizes' => $sizes,
                'prices' => $prices,
                'times' => $times
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yard = Yard::find($request->yard_id);
        $hour = date("H", strtotime(str_replace('-', '/', $request->start)));
        $orderData = [
            'title' => $request->title,
            'yard_id' => $request->yard_id,
            'customer_id' => Auth::id(),
            'user_id' => $yard->users_id,
            'amount' => Config::get('app.app-football.price')[$hour] ?? 90000,
            'status' => 0,
            'start' => $request->start,
            'end' => $request->end,
        ];
        $data = Orders::create($orderData);
        return route('payment_create', ['orderId' => $data->id]);
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
        //
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
        echo 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Orders::find($id);
        $data->delete();
    }
}
