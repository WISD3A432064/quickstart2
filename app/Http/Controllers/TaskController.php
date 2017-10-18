<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    //使用者認證
    public function __construct()
    {
        $this->middleware('auth');
    }
}
