<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblClasses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'C_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'C_NAME' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ]
        ]);
        $this->forge->addKey('C_ID', true);
        $this->forge->createTable('tbl_classes');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_classes');
    }
}
