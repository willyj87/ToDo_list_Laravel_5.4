<?php

namespace App\Http\Controllers;

use App\Items;
use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    //
    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks/index', compact('tasks'));
    }

    public function show(Tasks $task)
    {
        return view('tasks/show', compact('task'));
    }
    public function createTask()
    {
        return view('tasks/add');
    }
    public function storeTask()
    {
        $this->validate(request(),
            [
                'name'=>'required',
            ]);
        Tasks::create([
            'name'=>request('name'),
            'statut'=>0,
            'user_id'=>auth()->id()
        ]);
        return redirect()->home();
    }
    public function storeItem()
    {
        $this->validate(request(),
            [
                'name'=>'required'
            ]);
        Items::create([
            'name' => request('name'),
            'tasks_id'=> request('task_id'),
            'valid'=>0,
            ]);
        return back();
    }
    public function updateItem()
    {
        $id = request('id_item');
        Items::where('id',$id)->update(['valid'=> 1]);
    }
    
}
