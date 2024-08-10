<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUsertable extends Migration
{
    public function up()
    {
        $fields = array(
            'team_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'after' => 'college_name',
            ]
        ); 
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'team_name');

    }
}
