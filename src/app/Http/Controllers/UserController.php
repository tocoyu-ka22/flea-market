<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        return view('mypage', compact('user'));
    }

    public function profile()
    {
        $profiles = Auth::user();
        return view('edit', compact('profiles'));
    }

    public function create(AuthorRequest $request)
    {
        $user = Auth::user();
        
        $form = Profile::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
        ]);
        return redirect('mypage');
    }
}
