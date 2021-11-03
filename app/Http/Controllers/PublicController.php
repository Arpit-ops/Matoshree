<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Booking;
use Hash;
use App\Location;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use FarhanWazir\GoogleMaps\GMaps;
use DataTables;

class PublicController extends Controller
{
    public function gallery()
    {
        return view('webside.gallery');
    }
    public function login(Request $request) 
    {
        $user = User::where('phone_number',$request->phone_number)->first();
        if ($user->otp == $request->otp) {
            Auth::login($user);
            return view('admin_home');
        }else {
            return redirect()->back()->with('error','OTP not mach');
        }
    }

    public function sendOtp(Request $request)
    {
        $find = User::where('phone_number',$request->phno)->first();
        $otp = rand(1000,9999);
        $find->otp = $otp ;
        $find->save();
        echo $otp;
    }

    public function signup(Request $request)
    {
        $signup = new User();
        $signup->name = $request->name;
        $signup->phone_number = $request->phone_number;
        $signup->email = $request->email;
        $password = Hash::make($request->password); 
        $signup->password = $password;
        $signup->save();
        return redirect('/login')->with('success','Sign up Successfully');

    }

    public function contact()
    {
        return view('webside.contact');
    }

    public function getHome(){    
        return view('webside.home');
    }


    public function getPassword(Request $request)
{

    return view('public.changepassword');

}

public function postchangePassword(Request $request){
    $user=User::find(Auth::user()->id);
    $this->validate($request,User::$confirmpassword);
    $password = Hash::make($request->password); 
    $user->password=$password;
    $user->save;
    return redirect('/celebrity/all')->with('success','Password Changed Successfully');
}
   

}