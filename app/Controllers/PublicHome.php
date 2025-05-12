<?php

namespace App\Controllers;

class PublicHome extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
