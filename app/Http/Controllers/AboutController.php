<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
    return view('about',
    [   "title" => "About",
        "name" => "Ridhal Fajri Yz",
        "email" => "ridhalyz@apps.ipb.ac.id",
        "picture" => "foto.jpg",
        "occupation" => "mahasiswa"
    ]);
}
}
