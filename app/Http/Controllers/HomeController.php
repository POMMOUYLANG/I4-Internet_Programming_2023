<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller{

    public function renderHome(){
        
        return view('home');
    }
}
