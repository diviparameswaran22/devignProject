<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class AdminPagesMaster extends BaseController{

    public function _remap($meth)
    {
        if($meth=='republic')
        $this->maintain();
        else
        {
        $this->index();
        }
    }
    
    public function index()
    {
        helper(['form']);
        echo view('login'); 
    }
    

    public function republic($day=26,$mon='January',$imp='REPUBLIC')
    {
        echo "<br><br><hr width=300 height=300>";
        echo "<br><h2><i>".$day." ".$mon."</i> is the <i>".$imp."</i> DAY</h2>";
        echo "<br><h1>HAPPY ".$imp." DAY</h1><br>";
        echo "<br><br><hr width=300 height=300>";
    }
    
    public function maintain()
    {
        echo "<br><h1>republic page is under maintainance</h1><br>";
        echo "<h2>Please try later!</h2><br>";
        echo "<h2>Sorry for inconvenience.</h2>";
        
    }
}
