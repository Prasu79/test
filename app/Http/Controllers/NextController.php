<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NextController extends Controller
{
    public function next(){
        return view('next');
    }
}
