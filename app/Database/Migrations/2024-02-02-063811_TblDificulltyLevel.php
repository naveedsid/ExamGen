<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDificulltyLevel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'QDL_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'QDL_NAME' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ]
        ]);
        $this->forge->addKey('QDL_ID', true);
        $this->forge->createTable('tbl_dificullty_level');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_dificullty_level');
    }
}
