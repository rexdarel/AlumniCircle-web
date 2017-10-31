<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\UserAddress;
use App\Address;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_addresses = UserAddress::all();
        //$address = Address::all();
        $addresses = DB::table('users')
                    ->where('users.id', Auth::id())
                    ->join('user_addresses', 'users.id', '=', 'user_addresses.user_id')
                    ->join('addresses', 'user_addresses.address_id', '=', 'addresses.id')
                    ->select('users.*', 'user_addresses.type', 'addresses.*')
                    ->get();
        
        return view('profile', ['addresses' => $addresses]);
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('storage/users/' . $filename ) );

            $user = Auth::user();
            $user->avatar = 'users/'.$filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }

    public function addresses(){

    }


}
