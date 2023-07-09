<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        $offers = Offer::all();

        return view('welcome',compact('offers'));
    }
}
