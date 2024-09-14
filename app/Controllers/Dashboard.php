<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('sistema/index');
    }

    // Agrega más métodos para manejar otras vistas del dashboard
}
