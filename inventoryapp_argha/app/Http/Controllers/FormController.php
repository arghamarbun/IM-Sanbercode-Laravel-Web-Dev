<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function signup()
    {
        return view('page.register');
    }

    public function submit(Request $request)
    {
        $firstname = $request->input("firstname");
        $lastname = $request->input("lastname");

        return view('page.welcome', ['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
