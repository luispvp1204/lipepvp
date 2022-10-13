<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alunocontroller extends Controller
{
    public function  index () {
        $nome = "lipe";

        $arr = [10,20,30,40,50];
    
        return view('welcome',['nome' => $nome,'arr'=> $arr]);  
    
    }}

