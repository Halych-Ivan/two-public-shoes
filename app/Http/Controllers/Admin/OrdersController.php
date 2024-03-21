<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannersRequest;
use App\Models\Banner;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function index()
    {
        $orders = Order::query()->orderBy('active')->get();
        return view('admin.orders.index', compact('orders'));
    }


    public function create(Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function store(Request $request, Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function show(Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function edit(Request $request, Order $order)
    {
        $active = $request->input('active');
        $order->active = $active;
        $order->save();

        return redirect()->back();
    }


    public function update(Request $request, Order $order)
    {
        return redirect()->route('admin.messages.index');
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('alert', 'Дія виконана успішно!');
    }
}
