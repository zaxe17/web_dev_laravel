<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index()
    {
        return view('sample.student');
    }

    public function store(Request $request)
    {
        // dd();
        // dd('stop')
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $mail = $request->input('mail');
        $bday = $request->input('bday');
        $age = $this->calculateAge($bday);
        Log::info('=============>>>>>> Enter Student Controller');
        Log::critical($mail);
        Log::debug($mail);
        Log::error('haha error');
        Log::alert('first name: ' . $fname . ' last name: ' . $lname);
        // dd($lname . ', ' . $fname . ' ' . $mname);
        return view('sample.show', compact('lname', 'fname', 'mname', 'mail', 'bday', 'age'));
    }

    private function calculateAge($dayOfBirth) {
        $birthDate = Carbon::parse($dayOfBirth);
        $dateToday = Carbon::now();

        $age = $birthDate->diff($dateToday);

        return $age->y;
    }

    public function mockup()
    {
        return view('sample.mockup');
    }
}
