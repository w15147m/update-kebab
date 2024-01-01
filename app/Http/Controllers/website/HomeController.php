<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $shops = Shop::all();
        return view('user.home',compact('shops'));
    }
}
