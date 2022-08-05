<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Footer extends Controller {

    public function index() {
        echo view('footer/footer-section1');
        echo view('js/js');
    }
    

}
