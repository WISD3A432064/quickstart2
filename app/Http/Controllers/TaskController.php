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

    //回傳視圖
    public function index(Request $request)
    {
        return view('tasks.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // Create The Task...
    }


}
