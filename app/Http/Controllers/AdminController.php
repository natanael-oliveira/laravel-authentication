<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        dd(auth()->guard('admin')->user());
    }
    public function formLogin()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:100'
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('admin.login')
                ->withErrors($validator)
                ->withInput();
        }
        if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.index');
        }
    }
    public function formRegister()
    {
    }
    public function register(Request $request)
    {
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function dashboard()
    {
    }
}
