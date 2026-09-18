<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('layouts/header', $data)
            . view('pages/home', $data)
            . view('layouts/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('layouts/header', $data)
            . view('pages/about', $data)
            . view('layouts/footer');
    }
}