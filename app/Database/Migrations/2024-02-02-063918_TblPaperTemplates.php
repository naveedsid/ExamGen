<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPaperTemplates extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'QPTEM_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'auto_increment' => true
            ],
            'QPTEM_NAME' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'QPTEM_PATH' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ]
        ]);
        $this->forge->addKey('QPTEM_ID', true);
        $this->forge->createTable('tbl_paper_templates');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_paper_templates');
    }
}
