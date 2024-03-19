<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ContQuestionBank extends BaseController{
    //----- Main Function for Display Page Content -----
    private function main(){
        //content
    }
    public function index()
    {
        echo view("view_header");
        echo view("view_question_bank");
        echo view("view_footer");
    }
}
