<?php
       echo view('header/header');
       echo view('css/css');
       echo view('tophead/tophead');
       echo view('navbar/navbar');
       foreach($whichController as $items)
               {echo view($items); }
       echo view('footer/footer');
       echo view('footer/footer-section1');
       echo view('js/js');
