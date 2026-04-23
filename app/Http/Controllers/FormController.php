<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function form()
    {
        return view('register');
    }

    public function daftar(Request $request)
    {
        
        return view(
            'welcome',
            [
                'nama' => $request->firstname . " " . $request->lastname
            ]
        );
    }



}
