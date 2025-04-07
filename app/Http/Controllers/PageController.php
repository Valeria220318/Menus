<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function income()
    {
        return view('pages.income');
    }

    public function bills()
    {
        return view('pages.bills');
    }
}

