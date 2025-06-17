<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Doacao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'animal_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'especie' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'idade' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'castrado' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'vacinado' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'descricao' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true); // primary key
        // $this->forge->addForeignKey('animal_id', 'animais', 'id'); // Descomente se tiver tabela 'animais'
        $this->forge->createTable('doacao');
    }

    public function down()
    {
        $this->forge->dropTable('doacao');
    }
}
