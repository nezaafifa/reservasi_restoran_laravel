<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petugas;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }
    public function login(Request $request){
        if(Session::get('username')!=''){
            return redirect('/backend_home');
        }
        $data=Petugas::where('username',$request->username)->first();
        if($data!=''){
            if($request->password==$data->password){
                session::put('username',$data->username);
                return redirect('/backend_home');
            }
        }else{
            Session('message');
            return redirect('/login');
        }
        return redirect('/'->with('massage','Email atau password anda salah'));
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
