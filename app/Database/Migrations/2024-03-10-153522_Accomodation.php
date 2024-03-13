<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accomodation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'numofboys' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'numofgirls' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'team_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('accomodation');
    }

    public function down()
    {
        $this->forge->dropColumn('accomodation', 'id');
        $this->forge->dropColumn('accomodation', 'user_id');
        $this->forge->dropColumn('accomodation', 'numofboys');
        $this->forge->dropColumn('accomodation', 'numofgirls');
        $this->forge->dropColumn('accomodation', 'team_name');
        $this->forge->dropColumn('accomodation', 'created_at');
        $this->forge->dropColumn('accomodation', 'updated_at');
    }
}
