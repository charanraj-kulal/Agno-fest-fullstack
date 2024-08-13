<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAccomTableAddColAgreeTM extends Migration
{
    public function up()
    {
        $fields = array(
            'agree_tandm' => [
                'type'       => 'INT',
                'constraint' => 2,
                 'default' => 0,
                'after' => 'req_food',
            ],
           
        ); 
        $this->forge->addColumn('accomodation', $fields);
    }

    public function down()
    {
          $this->forge->dropColumn('accomodation', 'agree_tandm');

    }
}
