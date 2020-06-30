<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //


    

    public function welcomes(Request $request)
    {
        # code...
        $namaDepan = $request["namadepan"];
        $namaBelakang = $request["namabelakang"];
        $panggil = "$namaDepan"." "."$namaBelakang";

        return view("welcomes",["panggil" =>$panggil]);
    } 
}
