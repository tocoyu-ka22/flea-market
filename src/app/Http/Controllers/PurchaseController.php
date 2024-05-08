<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Profile;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
    }

    public function index($id)
    {
        $item = Item::find($id);
        return view('sale', compact('item'));
    }

    public function address()
    {
        return view('register_address');
    }
}
