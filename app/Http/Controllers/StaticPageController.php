<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about()
    {
        $tirage = rand(1, 10);
        $message = false;

        if($tirage==10)
        {
            $message = true;
        }

        return view('a_propos', [
            'message'=>$message,
        ]);
        
    }
}
