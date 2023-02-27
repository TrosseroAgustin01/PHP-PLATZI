<?php

namespace App\Http\Controllers;

#use App\Http\Response;

class HomeController{
    
    public function index(){
        /* return new Response("home"); */
        return view('home');
        #return 'home'; prueba para ver si capturaba bien el error;
    }
}