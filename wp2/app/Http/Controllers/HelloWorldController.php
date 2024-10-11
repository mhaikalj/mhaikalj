<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Helloworldcontroller extends Controller
{
    public function index()
    {
        return "selamat  belajar laravel 10";
    }
}