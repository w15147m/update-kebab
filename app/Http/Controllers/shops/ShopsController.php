<?php

namespace App\Http\Controllers\shops;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function insert(Request $req){
        $shop = new Shop();
        $shop->name = $req->name;
        $shop->save();
        return redirect()->back();
    }
}
