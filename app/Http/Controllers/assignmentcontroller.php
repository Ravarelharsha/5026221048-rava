<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assignmentcontroller extends Controller
{
    public function tugas1()
    {
        return view('assignments.tugas1');
    }

    public function responsive1()
    {
        return view('assignments.responsive1');
    }

    public function tugas3()
    {
        return view('assignments.tugas3');
    }

    public function hello()
    {
        return view('assignments.hello');
    }

    public function style2()
    {
        return view('assignments.tugas4');
    }
}
