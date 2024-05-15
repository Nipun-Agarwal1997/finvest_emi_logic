<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct() {
        
    }

    public function index(Request $request) {
        if($request->isMethod('post')) {
            $validate = Validator::make(
                $request->all(),
                array(
                    'username'       => 'required',
                    'password'   => 'required'
                ),
                array(
                    'username' => 'User Name is required',
                    'password' => 'Password is required'
                )
            );

            if($validate->fails()) {
                return Redirect::back()->withErrors($validate);
            } else {
                $authenticate = array(
                    'username' => $request->post('username'),
                    'password' => $request->post('password')
                );
                if (Auth::attempt($authenticate)) {

                    Session::flash('success', 'Login Successful');
                    return Redirect(route('admin.loansDetails'));
                } else {

                    Session::flash('error', 'Credentials not match. Try again!');
                    return Redirect::back();
                }
            }
        }
        return View::make('admin.auth.login');

    }

    // Used to logout the user
    public function logout() {
        Auth::logout();
        Session::flash('flash_notice', 'You are now logged out!');
        return Redirect(route('admin.login'));
    }
}
