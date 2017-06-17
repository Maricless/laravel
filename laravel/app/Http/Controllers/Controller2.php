<?php

namespace App\Http\Controllers;


class Controller2 extends Controller
{

    function one()
    {
    	return view('one');
    
    	// $sutdents DB::select('select * from sutdents');
    	// var_dump($sutdents);
    }
}
