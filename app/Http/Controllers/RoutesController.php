<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function employee() {
        return "<h1>Employee</h1>";
    }

    public function admin() {
        return "<h1>Employee</h1>";
    }
    
    public function responsive() {
        return view('sample.respon');
    }
    
    public function dashboard() {
        return view('dashboard');
    }
    
    public function user() {
        return view('user');
    }

    public function userid($id = null) {
        return "<a href='" . route('editUser', $id) . "'>Edit</a>";
    }

    public function home($name) {
        return view('home', ['name' => $name]);
    }
    
    public function edit($id) {
        return "Edit your ID is: " . $id;
    }
}
