<?php

namespace App\Controllers;

class Recipies extends BaseController
{
    private $HeaderMenu;  //This can be accessed by all class methods

    public function __construct()
    {
        parent::__construct();

        $model = new ShopModel(); //Consider using CI's way of initialising models

        $this->HeaderMenu = [
               'shop' => $model->table('shop')->where('brand_name_slug', 'hugo-boss')->findAll(),
           ]; //use the $this keyword to access class variables
    }

    public function index()
    {
        $data = [];
        $data['title'] = 'Delicious - Receipies Blog | Home';
        $data['title'] = $HeaderMenu;
        echo view('templates/header', $data);
        echo view('recipies_list', $data);
        echo view('templates/footer', $data);
    }
}
