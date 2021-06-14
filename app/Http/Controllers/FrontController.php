<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UIKit;

class FrontController extends Controller
{
    //

    public function index()
    {
        $all_uikit = UIKit::all();

        return view('front.index', compact('all_uikit'));

    }

    public function details($slug){
        $uikit_details = UIKit::where('id', '=', $slug)->first();
        
        return view('front.details', compact('uikit_details'));
    }

    public function gate()
    {
        return view('front.gate');

    }


}