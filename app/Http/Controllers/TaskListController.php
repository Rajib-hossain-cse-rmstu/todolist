<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    public function index()
    {
        return view('todolist');
    }

    public function create(Request $request)
    {
        // dd($request->all());
        TaskList::create([
            'task' => $request->task,
        ]);
        return redirect()->back();
    }
    
    public function listUpdate($id)
    {

    }

    public function progressUpdate($id)
    {

    }

    public function doneUpdate($id)
    {

    }

    public function delete($id)
    {

    }
}
