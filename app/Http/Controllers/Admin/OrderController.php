<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderList;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.order.create');
    }

    public function store(Request $request)
    {
        try {


            $order = order::create($request->except(['_token']));



        foreach( \Cart::getContent() as $item){
            $order_list = new OrderList();
            $order_list->order_id = $order->id ;
            $order_list->product = $item->name;
            $order_list->quantity = $item->quantity;
            $order_list->save();
        }


        \Cart::clear();



            return redirect()->route('thank');

               } catch (\Exception $ex) {
            return redirect()->route('thank');
        }
    }

    public function edit($id)
    {
        $order = order::select()->find($id);
        if (!$order) {
            return redirect()->route('order.index')->with(['error' => 'This order does not exist']);
        }

        return view('admin.order.edit', compact('order'));
    }

    public function update($id, Request $request)
    {

        try {
            $order = order::find($id);
            if (!$order) {
                return redirect()->route('admin.order.edit', $id)->with(['error' => 'This order does not exist']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $order->update($request->except('_token'));

            return redirect()->route('order.index')->with(['success' => ' Product update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('order.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $order = order::find($id);
            if (!$order) {
                return redirect()->route('admin.order', $id)->with(['error' => 'This order does not exist']);
            }
            $order->delete();

            return redirect()->route('order.index')->with(['success' => ' Product delete successfully  ']);

        } catch (\Exception $ex) {
            return redirect()->route('order.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function print($id){
        $order = order::select()->find($id);
        if (!$order) {
            return redirect()->route('order.index')->with(['error' => 'This order does not exist']);
        }

        return view('admin.order.print', compact('order'));


    }

}