<?php

namespace App\Http\Controllers;

use App\Mail\contactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactoController extends Controller
{

    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'company' => 'required',
            'people' => 'required',
            'message' => 'required'
        ]);
        Mail::to('info.@thecoreresources.com')->queue(new contactoMail($message));
        return redirect()->back();
    }
}
