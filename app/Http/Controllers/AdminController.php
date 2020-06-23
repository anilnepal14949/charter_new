<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Category;

class AdminController extends Controller
{
    protected $my_data;
    public function __construct(){
        // $this->middleware('auth');
        $this->my_data['activeMenu'] = '';
        $this->my_data['categories'] = Category::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('username')){
            return view('admin.includes.home',$this->my_data);
        }else{
            return view('auth.login');
        }
    }


    public function login(Request $request){
        $user = User::first();
        $username = $request->get('username');
        $password = $request->get('password');

        if($username == $user->username && md5($password) == $user->password){
            $request->session()->put('username', $user->username);
            return view('admin.includes.home',$this->my_data);
        }else{
            $request->session()->flush();
            return view('auth.login');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect()->route('admin');
    }
}
