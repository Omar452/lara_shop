<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('category')->where('quantity', '>', 0)->paginate(10);
        return view('items.index', compact('items'));
    }
}
