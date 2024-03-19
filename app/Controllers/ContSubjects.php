<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModSubjects;
use CodeIgniter\HTTP\ResponseInterface;

class ContSubjects extends BaseController{
    public function __construct(){
        $this->mod_subjects = new ModSubjects();
    }
    //------ Main Function for Display Content --------
    private function main($edit_record = null){
        $m_data = [
            'subjects_records' => $this->mod_subjects->getRecords(),
            'edit_record' => $edit_record
        ];
        echo view('view_header', $m_data);
        echo view('view_subjects');
        echo view('view_footer');
    }

    //---- Default Landing Function -----
    public function index(){
        $this->main();
    }

    //---------------- Insertion Function ----------------
    public function insert(){
        if($this->request->getPost()){
            $ins_data = [
                'S_NAME' => $this->request->getPost('txt_subject_name')
            ];
            $this->mod_subjects->insert($ins_data);
            return redirect()->to('/subjects');
        }
    }

    //---------------- Update Function ----------------
    public function edit($edit_id){
        $edit_record = $this->mod_subjects->find($edit_id);
        if (empty($edit_record)) {
            // ---- Record not found against edit id -----
            return redirect()->to('subjects');
        }else{
            if ($this->request->getMethod() == 'post') {
                $update_data = [
                    'S_NAME' => $this->request->getPost('txt_subject_name')
                ];
                $this->mod_subjects->update($edit_id, $update_data);
                return redirect()->to('subjects');
            }
            // ------ Record found again edit id ---- redirect to edit form with record data ------
            $this->main($edit_record);
            echo "<script> $(document).ready(function() { $('#update_modal').modal('show'); }); </script>";
        }
    }

    //---------------- Delete Function ----------------
    public function delete($del_id){
        //----- Check if ID record is exist ---------
        $del_record = $this->mod_subjects->find($del_id);
        if (empty($del_record)) {
            return redirect()->to('subjects');
        }else{
            $this->mod_subjects->delete($del_id);
            return redirect()->to('subjects');
        }
    }
}
