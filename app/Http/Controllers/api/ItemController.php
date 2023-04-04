<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items= Item::all();
        return response()->json([
            'items'=>$items
        ]);
    }

    public function store(Request $request)
    {

        $items= Item::create(
            [
                'name' => $request->name,
                'price' => $request->price
            ]
        );
        return response()->json([
            'items'=> $items,
            'message' => 'success']);

    }
}
