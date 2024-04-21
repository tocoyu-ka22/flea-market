<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
    }

    public function create($id)
    {
        $item = Item::find($id);
        return view('comment', compact('item'));
    }
}
