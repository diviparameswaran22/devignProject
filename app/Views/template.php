<?php
        echo view('header/header');
        echo view('css/css');
       echo view('tophead/tophead');
       echo view('navbar/navbar');
           $t=0;
           foreach($whichPages as $page)
               {
                // echo $page['admin_page_name'];
                 echo view('home/'.$page['admin_page_name']); 
                  //return $items['admin_page_name'];
                  
                }
       echo view('footer/footer');
       echo view('footer/footer-section1');
       echo view('js/js');
