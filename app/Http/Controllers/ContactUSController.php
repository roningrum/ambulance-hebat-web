<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    //ke halaman Contact Us
    public function contactUs(){
        return view('contact-us',[
            "title" =>"contact"
        ]);
    }
}
