<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableQualTeams extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'qual_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qual_web' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qual_game' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qual_thunt' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qual_photo' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qual_quiz' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'default' => 'Not Yet Disclosed..!',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('qual_teams');
    }

    public function down()
    {
        $this->forge->dropTable('qual_teams');
    }
}