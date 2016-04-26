<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $hola;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmessage = $this->test();
        return view('home');
    }

    private function test()
    {
        $this->hola = "wtf";
        echo $this->hola; 
        

        return $this->hola;
    }

    

}
