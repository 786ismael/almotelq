<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller{

    public function jamaliLogin($token){
        $token = base64_decode(base64_decode($token));
        Auth::loginUsingId($token);
        if(!auth()->user()->id){
            return redirect('https://almotelq.com/jamali/admin');
        }
        return redirect()->route('dashboard');
    }

    public function index(){
        return view('admin.landingPage.index');
    }
}
