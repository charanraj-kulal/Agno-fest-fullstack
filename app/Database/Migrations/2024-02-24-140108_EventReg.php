<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EventReg extends Migration
{
    public function up()
    {
    $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'coding_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'coding_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'coding_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'coding_mem_contact_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'quiz_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'quiz_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'quiz_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'quiz_mem_contact_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'web_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'web_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'web_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'web_mem_contact_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_contact_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_3' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_contact_3' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_4' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'game_mem_contact_4' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'itmanager_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'itmanager_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'photo_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'photo_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'video_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'video_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'video_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'video_mem_contact_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'thunt_mem_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'thunt_mem_contact_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'thunt_mem_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'thunt_mem_contact_2' => [
                'type' => 'VARCHAR',
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
        $this->forge->createTable('event_registration');
    }

    public function down()
    {
        $this->forge->dropTable('event_registration');
    }
}