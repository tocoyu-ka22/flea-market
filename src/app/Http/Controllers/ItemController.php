<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
    }

    public function index()
    {
        $items = Item::all();
        return view('home',['items' => $items]);
    }

    public function detail($id)
    {
        $item = Item::find($id);
        return view('detail', compact('item'));
    }

}
