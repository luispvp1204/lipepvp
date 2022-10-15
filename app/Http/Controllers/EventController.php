<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\professores;

class EventController extends Controller
{
    public  function index ()  {
        
        $professores = professores::all();

        return view('welcome',['professores'=>$professores]);
    }
    public function  create ()   {
        return view ('events.create');
    }
        }   
    

