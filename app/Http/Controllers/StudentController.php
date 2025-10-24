<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('sample.student');
    }

    public function store(Request $request)
    {
        // dd();
        // dd('stop');
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $mail = $request->input('mail');
        $bday = $request->input('bday');
        // dd($lname . ', ' . $fname . ' ' . $mname);
        return view('sample.show', compact('lname', 'fname', 'mname', 'mail', 'bday'));
    }

    public function mockup()
    {
        return view('sample.mockup');
    }
}
