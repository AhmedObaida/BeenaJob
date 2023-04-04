<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;


class orderController extends Controller
{
    public function store(Request $request, Item $itemID)
    {
       $order= Order::create(
            [
                'item_id' => $itemID->id,
                'status' => 'draft',
            ]
            
            );
        $items=Item::all();
        return response()->json([
            'order' => $order,
            'items'=> $items,
            'message' => 'success']);
    }

    public function update(Request $request, Order $order)
    {
        $order= Order::find($order->id);
        $order->update(
            [
            'user_email' => $request->user_email,
            'status' => 'confirmed'
            ]
            
        );

        return response()->json([
            'order'=> $order
        ]);       


    }
}
