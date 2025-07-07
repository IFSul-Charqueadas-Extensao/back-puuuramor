<?php

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLoginController;

class LoginController extends ShieldLoginController
{
    public function index()
    {
        if (auth()->user()) {
            return redirect()->to(config('Auth')->loginRedirect());
        }

        return parent::index();
    }
}
