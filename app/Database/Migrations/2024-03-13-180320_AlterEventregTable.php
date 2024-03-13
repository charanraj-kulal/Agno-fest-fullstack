<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEventregTable extends Migration
{
    public function up()
    {
        $fields = array(
            'team_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'after' => 'user_id',
            ]
        ); 
        $this->forge->addColumn('event_registration', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('event_registration', 'team_name');
    }
}
