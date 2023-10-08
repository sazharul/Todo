<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return to_route('home');
    }

    public function name()
    {
        $task = Task::get();
        return view('name', compact('task'));
    }
}
