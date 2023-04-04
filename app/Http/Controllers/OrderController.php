<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Item $itemID)
    {
        // dd($itemID->id);
       $order= Order::create(
            [
                'item_id' => $itemID->id,
                'status' => 'draft',
            ]
            
            );
        $items=Item::all();
            return view('items.index', ['order' => $order , 'items' => $items]);
            // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order= Order::find($order->id);
        $order->update(
            [
            'user_email' => $request->user_email,
            'status' => 'confirmed'
            ]
        );


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
