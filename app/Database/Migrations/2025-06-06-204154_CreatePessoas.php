<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePessoas extends Migration
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
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true
            ],
            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true
            ],
            'endereco' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true
            ],
            'cidade' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true
            ],
            'cep' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true
            ],
            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pessoas');
    }

    public function down()
    {
        $this->forge->dropTable('pessoas');
    }
}