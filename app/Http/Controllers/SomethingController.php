<?php

namespace App\Http\Controllers;

use App\Models\Something;
use Illuminate\Http\Request;

class SomethingController extends Controller
{
    public function something() {
        $something = Something::get();
        return view('something', compact('something'));
    }
}
