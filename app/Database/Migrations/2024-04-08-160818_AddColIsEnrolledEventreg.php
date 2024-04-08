<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColIsEnrolledEventreg extends Migration
{
    public function up()
    {
         $fields = array(
            'isenrolled' => [
                'type'       => 'INT',
                'constraint' => 5,
                'default' => 0, 
                'after' => 'thunt_mem_contact_2',
            ]  
        ); 
        $this->forge->addColumn('event_registration', $fields);
    }

    public function down()
    {
                $this->forge->dropColumn('event_registration', 'isenrolled');

    }
}
