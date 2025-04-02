<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

abstract class Controller
{
    //
}
class  Pref extends Controller{
    function studentHome(){
        return view('urltwo');
    }
}

class Controllertwo extends Controller{
    function abc($name){
        return "hi, ".$name;
        // return view('cont.controllerviewtwo');
    }

    function xyz(){
        return "function xyz";
    }
    
}