<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'Dashboard',
            'icon'    => 'nav-icon fas fa-tachometer-alt',
            'content' => 'layout/v_dashboard'
        ];
        echo view('layout/v_wrapper', $data);
    }
}