<?php

namespace App\Controllers;

class Ecomm extends BaseController {

    public function ecommPage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('ecomm/ecomm-section1');
        echo view('ecomm/ecomm-section2');
        echo view('ecomm/ecomm-section3');
        echo view('ecomm/ecomm-section4');
        echo view('ecomm/ecomm-section5');
        echo view('ecomm/ecomm-section6');
        echo view('ecomm/ecomm-section7');

        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
