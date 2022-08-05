<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Home extends BaseController
{

    public function index()
    {
        helper('url');
        
        $data = array(
            'whichController' =>
            array('home/home-section1',
            'home/home-section2',
            'home/home-section3',
            'home/home-section4',
            'home/home-section5',
            'home/home-section6',
            'home/home-section7',
            'home/home-section8',
            'home/home-section9',
            'home/home-section10',
            'home/home-section11',
            'home/home-section12',
            'home/home-section13'));

        return view('template', $data);

        // echo view('header/header');
        // echo view('css/css');
        // echo view('tophead/tophead');
        // echo view('navbar/navbar');
        // echo view('home/home');
        // echo view('home/home-section1');
        // echo view('home/home-section2');
        // echo view('home/home-section3');
        // echo view('home/home-section4');
        // echo view('home/home-section5');
        // echo view('home/home-section6');
        // echo view('home/home-section7');
        // echo view('home/home-section8');
        // echo view('home/home-section9');
        // echo view('home/home-section10');
        // echo view('home/home-section11');
        // echo view('home/home-section12');
        // echo view('home/home-section13');
        // echo view('footer/footer');
        // echo view('footer/footer-section1');
        // echo view('js/js');
    }
}
