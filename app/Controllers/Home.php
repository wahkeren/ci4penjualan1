<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data['title'] = 'Dashboard';
        return view('dashboard', $data);
    }

    // public function register()
    // {
    //     return view('auth/register');
    // }
    // public function user()
    // {
    //     return view('user/index');
    // }
}
