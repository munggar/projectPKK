<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function proses_login(Request $request){
        request()->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ]);
            $kredensil = $request->only('email','password');

            if(Auth::attempt($kredensil)){
                $user = Auth::user();
                if($user->level == 'walikelas'){
                    Alert::success('Berhasil');
                    return redirect()->intended('wali');
                } elseif ($user->level == 'ketuamurid'){
                    Alert::success('Berhasil');
                    return redirect()->intended('kls');
                }
                return redirect()->intended('kls');
            } else{
                Alert::warning('Error', 'Email / Password Salah!!');
                return back();
            }
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();

        return redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function registrasi(Request $request){

        $nm = $request->foto;
        $namafile = $nm->getClientOriginalName();

        $dtupload = new User;
        $dtupload->name = $request->name;
        $dtupload->username = $request->username;
        $dtupload->email = $request->email;
        $dtupload->level = $request->level;
        $dtupload->password = bcrypt($request->password);

        $dtupload->foto = $namafile;

        $nm->move(public_path().'/User',$namafile);
        $dtupload->save();

        Alert::success('Berhasil membuat Akun baru');
        return redirect('kls');
     }

}
