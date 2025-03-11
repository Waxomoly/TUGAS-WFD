<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function viewHome()
    {
        $data['title'] = 'Home';

        return view('home', $data);
    }

    function viewAboutUs()
    {
        $data['title'] = 'About Us';

        return view('aboutus', $data);
    }

    function viewLocation()
    {
        $data['title'] = 'Location';

        return view('location', $data);
    }
}
