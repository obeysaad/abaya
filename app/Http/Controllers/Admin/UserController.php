<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(){
        $userId = Auth::user()->id;

        $user = User::find($userId);

        return view('admin.pages.profile' , compact('user'));
    }

    public function profileUpdate(Request $request){
        $user = User::find($request->user_id);

        $user->name= $request->name;
        $user->password= Hash::make($request->password);
        $user->email= $request->email;

        $user->save();

        $profile= $user->profile;

        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->state = $request->state;
        $profile->nationality = $request->nationality;

        $profile->save();


        return redirect()->back();

    }
}