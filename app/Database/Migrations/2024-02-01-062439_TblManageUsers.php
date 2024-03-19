<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class TblManageUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'MU_ID' => [
                'type'           => 'INT',
                'constraint'     => 9,
                //'unsigned'       => true,
                'auto_increment' => true,
            ],
            'MU_FULL_NAME' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'MU_EMAIL' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'MU_PHONENO' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'MU_USERNAME' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'MU_PASSWORD' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'MU_STATUS' => [
                'type'       => 'INT',
                'constraint' => 1,
                'default'    => '1',
                'null' => false
            ],
            'MU_CREATED_AT' => [
                'type'       => 'TIMESTAMP',
                'default'    => Time::now('Asia/Karachi','en_US')
            ],
            'MU_UPDATED_AT' => [
                'type'       => 'TIMESTAMP',
                'default'    => Time::now('Asia/Karachi','en_US')
            ],
        ]);
        $this->forge->addKey('MU_ID', true);
        $this->forge->createTable('tbl_manage_users');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_manage_users');
    }
}
