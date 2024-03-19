<?php
namespace App\Controllers;

class ContDashboard extends BaseController{
    public function index(){
        echo view('view_header');
        echo view('view_dashboard');
        echo view('view_footer');
    }
}