<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Website',
            'tes' => ['satu', 'dua', 'tiga']

        ];
        return view('pages/Home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/About', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
        ];
        return view('pages/Contact', $data);
    }
}
