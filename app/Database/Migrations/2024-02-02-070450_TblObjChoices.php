<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblObjChoices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'OC_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'Q_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ],
            'OC_TITLE' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ]
        ]);
        $this->forge->addKey('OC_ID', true);
        $this->forge->createTable('tbl_obj_choices');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_obj_choices');
    }
}
