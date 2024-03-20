<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUserTableAddOTPCraetedAt extends Migration
{
    public function up()
    {
        $fields = array(
            'token_expires_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'after' => 'active',
            ],
        );
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'token_expires_at');
    }
}
