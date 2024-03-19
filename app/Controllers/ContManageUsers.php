<?php

namespace App\Controllers;

use App\Models\ModManageUsers;

class ContManageUsers extends BaseController
{
    public function __construct(){
        $this->mod_manage_users = new ModManageUsers();
        // $this->session
    }

    //---- Main Function for Display Page ----
    private function main($edit_record = null){
        $m_data = [
            'manage_users_records' => $this->mod_manage_users->getRecords(),
            'edit_record' => $edit_record
        ];
        echo view('view_header', $m_data);
        echo view('view_manage_users');
        echo view('view_footer');
    }


    //---- Default Landing Function -----
    public function index(){
        $this->main();
    }
    

    //---------------- Insertion Function ----------------
    public function insert(){    
        if ($this->request->getMethod() == 'post') {
            $ins_data = [
                'MU_FULL_NAME' => $this->request->getPost('txt_full_name'),
                'MU_EMAIL' => $this->request->getPost('txt_email'),
                'MU_PHONENO' => $this->request->getPost('txt_phoneno'),
                'MU_USERNAME' => $this->request->getPost('txt_username'),
                'MU_PASSWORD' => $this->request->getPost('txt_password'),
                'MU_STATUS' => $this->request->getPost('txt_status')
            ];
            $this->mod_manage_users->insert($ins_data);
            return redirect()->to('/manage_users');
        }
    }


    //---------------- Update Function ----------------
    public function edit($edit_id){
        $edit_record = $this->mod_manage_users->find($edit_id);
        if (empty($edit_record)) {
            //---- Record not found against edit id -----
            return redirect()->to('manage_users');
        } else {
            //------ Record found again edit id & data sent for update ---- check post request if data has received ---
            if ($this->request->getMethod() == 'post') {
                $update_data = [
                    'MU_FULL_NAME' => $this->request->getPost('txt_full_name'),
                    'MU_EMAIL' => $this->request->getPost('txt_email'),
                    'MU_PHONENO' => $this->request->getPost('txt_phoneno'),
                    'MU_USERNAME' => $this->request->getPost('txt_username'),
                    'MU_PASSWORD' => $this->request->getPost('txt_password'),
                    'MU_STATUS' => $this->request->getPost('txt_status')
                ];
                $this->mod_manage_users->update($edit_id, $update_data);
                return redirect()->to('manage_users');
            }
            //------ Record found again edit id ---- redirect to edit form with record data ------
            $this->main($edit_record);
            echo "<script> $(document).ready(function() { $('#update_modal').modal('show'); }); </script>";
        } // End of edit record is empty
    } //End of Edit Function

    //---------------- Delete Function ----------------
    public function delete($del_id){
        //----- Check if ID record is exist ---------
        $del_record = $this->mod_manage_users->find($del_id);
        if (empty($del_record)) {
            return redirect()->to('manage_users');
        }else{
            $this->mod_manage_users->delete($del_id);
            return redirect()->to('manage_users');
        }
    }// End of Delete Function
}
//session->getFlashdata()
// sweet alert
// plugin for manage users status