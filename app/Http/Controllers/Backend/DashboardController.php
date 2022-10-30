<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
       return view('backend.pages.dashboard');
    }

    public function users(){
       return view('backend.pages.users');
    }
}
