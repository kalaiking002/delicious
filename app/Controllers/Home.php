<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Delicious - Receipies Blog | Home';

        echo view('templates/header', $data);
        echo view('home_page', $data);
        echo view('templates/footer', $data);
    }
}
