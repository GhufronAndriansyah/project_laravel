<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;
use App\LoginAkun;
use Validator;
use Session;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('cek_login');
    }
    public function index()
    {
        $data = LoginAkun::all();
        return view('dashboard',compact('data'));
    }
}
