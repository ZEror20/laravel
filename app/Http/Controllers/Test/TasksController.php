<?php

namespace App\Http\Controllers\Test;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\facades\Input;

class TasksController extends BaseController
{
    public function create() {
      return view('welcome');
    }

    public function store(\Illuminate\Http\Request $request) {
      $task = new Task;
      $task->title = $request->input('title');
      $task->description = $request->input('description');
      $task->save();

      return redirect('tasks');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
