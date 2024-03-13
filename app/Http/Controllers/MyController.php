<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __construct() //MyController
    {

    }

    public function index(){
        return view('home');
    }
    public function love(){
        return view('multiple');
    }
    public function firstP(){
        return view('welcome');
    }


    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
}
