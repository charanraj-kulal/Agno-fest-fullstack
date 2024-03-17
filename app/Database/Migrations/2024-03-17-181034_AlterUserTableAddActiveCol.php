<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUserTableAddActiveCol extends Migration
{
    public function up()
    {
        $fields = array(
            'otp' => [
                'type'       => 'INT',
                'constraint' => 10,
                'after' => 'password',
            ],
            'active' => [
                'type'       => 'INT',
                'constraint' => 1,
                'after' => 'user_type',
            ]
        ); 
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'active');
    }
}
