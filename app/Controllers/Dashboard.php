<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
          
        // $session = session();
        // echo "Welcome back, ".$session->get('user_name');
    }

    public function newDashboard($youareadmin){
        return view('dashboard',$youareadmin) ;   
    }
}