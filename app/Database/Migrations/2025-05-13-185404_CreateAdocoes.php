<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdocoes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'animal_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false
            ],
            'pessoa_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false
            ],
            'questionario' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'data_adocao' => [
                'type' => 'DATE',
                'null' => false
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('animal_id', 'animais', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('pessoa_id', 'pessoas', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('adocoes');
    }

    public function down()
    {
        $this->forge->dropTable('adocoes');
    }
}
