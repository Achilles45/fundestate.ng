<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Function to load the home page
    public function index(){
        return view('pages.index');
    }
}
