<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\ChangePasswordRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
    		return redirect('/dashboard');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }

    public function changePassword(){
        return view('change-password');
    }

    public function updatePassword(ChangePasswordRequest $request){
        $old_password = Auth::user()['password'];
        $id_user = Auth::user()['id'];

        if (Hash::check($request->input('old_password'), $old_password)){
            $user = User::find($id_user);

            $user->password = Hash::make($request->input('password'));

            if ($user->save()){
                return redirect()->back->with('success', 'Ganti password berhasil');
            }else{
            return redirect()->back()->with('failed', 'Password lama invalid');
            }
        }else{
            return redirect()->back()->with('failed', 'Password lama invalid');
        }
    }
}
