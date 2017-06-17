<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller2 extends Controller
{
    /**
     * 储存一个新用户。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }
}