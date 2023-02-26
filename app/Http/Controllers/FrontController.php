<?php

namespace App\Http\Controllers;
use App\Models\Tutorial;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $tutorials = Tutorial::latest()->get();
        return view('front/index', compact('tutorials'));
    }

    public function details($slug)
    {
        $details = Tutorial::where([
            ['slug', '=', $slug],
        ])->first();
        
        if($details)
        {
            return view('front/details', compact('details'));
        }
    }
}