<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblQuestion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Q_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'S_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ],
            'Q_TYPE_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ],
            'QDL_ID' => [
                'type'       => 'INT',
                'constraint' => 9,
                'null' => false
            ],
            'Q_TITLE' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ]
        ]);
        $this->forge->addKey('Q_ID', true);
        $this->forge->createTable('tbl_questions');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_questions');
    }
}
