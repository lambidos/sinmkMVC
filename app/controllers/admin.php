<?php


class Admin extends Controller
{
   /*  function __construct()
    {
        
        if ($_SESSION['USER']['role'] != 'admin') {
            redirect('home');
        }
    } */
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('newarrivals');
        $data = $produitsModel->findAll();

        
        $this->view('admin',$data,'arrivals-table');
    }
    public function features($a = '', $b = '', $c = '')
    {
        $data = [];
        $produitsModel = new Produit('features');
        $data = $produitsModel->findAll();

        
        $this->view('admin',$data,'features-table');
    }
    
   
   
}

