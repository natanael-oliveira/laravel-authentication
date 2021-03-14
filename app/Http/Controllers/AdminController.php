<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin', ['except' => 'login', 'formRegister']);
    }
    public function index()
    {
    }
    public function formLogin()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
    }
    public function formRegister()
    {
    }
    public function register(Request $request)
    {
    }
    public function logout()
    {
    }
    public function dashboard()
    {
    }
}
