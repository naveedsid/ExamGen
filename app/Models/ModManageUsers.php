<?php

namespace App\Models;

use CodeIgniter\Model;

class ModManageUsers extends Model
{
    protected $table            = 'tbl_manage_users';
    protected $primaryKey       = 'MU_ID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['MU_FULL_NAME','MU_EMAIL','MU_PHONENO','MU_USERNAME','MU_PASSWORD','MU_STATUS'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'MU_CREATED_AT';
    protected $updatedField  = 'MU_UPDATED_AT';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    

    public function getRecords(){
        return $this->orderBy('MU_ID','AESC')->findAll();
    }
}
