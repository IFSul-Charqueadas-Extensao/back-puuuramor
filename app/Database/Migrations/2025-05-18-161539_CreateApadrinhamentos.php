<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateApadrinhamentos extends Migration
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
            'valor_mensal' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false
            ],
            'data_inicio' => [
                'type' => 'DATE',
                'null' => false
            ],
            'ativo' => [
                'type'    => 'BOOLEAN',
                'default' => true,
                'null'    => false
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

        $this->forge->createTable('apadrinhamentos');
    }

    public function down()
    {
        $this->forge->dropTable('apadrinhamentos');
    }
}
