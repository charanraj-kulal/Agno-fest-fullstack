<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAccomTableAddReqFoodCol extends Migration
{
    public function up()
    {
         $fields = array(
            'req_food' => [
                'type'       => 'INT',
                'constraint' => 2,
                 'default' => 0,
                'after' => 'emg_contact',
            ],
           
        ); 
        $this->forge->addColumn('accomodation', $fields);
    }

    public function down()
    {
                  $this->forge->dropColumn('accomodation', 'req_food');

    }
}
