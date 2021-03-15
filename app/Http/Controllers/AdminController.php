<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;
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
                ->withInput(Input::except('password'));
        }
        if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.index');
        }
        $errors = new MessageBag(['login' => ['Email and/or password invalid.']]);
        return redirect()
            ->route('admin.login')
            ->withErrors($errors)
            ->withInput(Input::except('password'));
    }
    public function formRegister()
    {
        return view('admin.auth.register');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100|unique:admins',
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required|min:3|max:100'
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('admin.register')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        $admin = Admin::create($request->all());
        if ($admin) {
            auth()->guard('admin')->login($admin);
            return redirect()->intended(route('admin.index'));
        }
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
