<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAccomodationAddEmgcontactField extends Migration
{
    public function up()
    {
         $fields = array(
            'emg_contact' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                
                'after' => 'team_name',
            ],
           
        ); 
        $this->forge->addColumn('accomodation', $fields);
    }

    public function down()
    {
          $this->forge->dropColumn('accomodation', 'emg_contact');
    }
}
