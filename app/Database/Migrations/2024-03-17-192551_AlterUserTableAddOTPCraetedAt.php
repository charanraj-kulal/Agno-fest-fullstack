<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUserTableAddOTPCraetedAt extends Migration
{
    public function up()
    {
        $fields = array(
            'otp_created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                    'after' => 'active',
            ],
           
        );
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'otp_created_at');

    }
}
