<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * 显示创建新的博客文章的表单
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

  // *
//  * 存储博客文章
//  *
//  * @param  Request  $request
//  * @return Response
 
// public function store()
// 	{

    
// 	}
//     // 验证通过，存储到数据库...
}