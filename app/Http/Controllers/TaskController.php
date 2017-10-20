<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    //使用者認證
    public function __construct()
    {
        $this->middleware('auth');
    }

    //顯示已建立任務
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();

        //dd($tasks);
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);


        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }




}
