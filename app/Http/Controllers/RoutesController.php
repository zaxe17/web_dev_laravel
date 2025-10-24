<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function responsive() {
        return view('sample.respon');
    }
    
    public function dashboard() {
        return view('dashboard');
    }
    
    public function user($id = null) {
        if($id) {
            return "<a href='" . route('editUser', $id) . "'>Edit</a>";
        }
        else {
            return view('user');
        }
    }

    public function home($name) {
        return view('home', ['name' => $name]);
    }
    
    public function edit($id) {
        return "Edit your ID is: " . $id;
    }
}
