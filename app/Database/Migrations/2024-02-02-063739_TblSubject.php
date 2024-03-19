<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblSubject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'S_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'S_NAME' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ]
        ]);
        $this->forge->addKey('S_ID', true);
        $this->forge->createTable('tbl_subject');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_subject');
    }
}
