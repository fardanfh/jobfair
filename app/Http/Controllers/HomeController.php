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

    public function jobposting()
    {
        return view("dashboard.create");
    }

    public function jobapplications()
    {
        return view("dashboard.appli");
    }

    public function jobinvitations()
    {
        return view("dashboard.appli");
    }
}
