<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblObjAnswers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'OA_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'Q_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ],
            'OC_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ]
        ]);
        $this->forge->addKey('OA_ID', true);
        $this->forge->createTable('tbl_obj_answers');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_obj_answers');
    }
}
