<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAnimais extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'especie' => [
                'type'       => 'ENUM',
                'constraint' => ['gato', 'cachorro'],
                'null'       => false,
            ],
            'idade' => [
                'type' => 'INT',
                'null' => true,
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'categoria' => [
                'type'       => 'ENUM',
                'constraint' => ['adotavel', 'especial', 'nao_adotavel', 'ja_adotado', 'memorial'],
                'default'    => 'adotavel',
                'null'       => false,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['disponivel', 'em tratamento', 'adotado'],
                'default'    => 'disponivel',
                'null'       => false,
            ],
            'imagem' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'data_resgate' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'data_castracao' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('animais');
    }

    public function down()
    {
        $this->forge->dropTable('animais');
    }
}
