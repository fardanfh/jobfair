<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function halamandashboard()
    {
        return view('dashboard.home');
    }

    public function halamanPekerjaan()
    {
        return view("dashboard.jobs");
    }

    public function halamanProfile()
    {
        // return view("dashboard.profile");
    }

    public function halamancreatepekerjaan()
    {
        // return view("dashboard.create");
    }
}
