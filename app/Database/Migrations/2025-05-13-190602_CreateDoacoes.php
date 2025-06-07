<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDoacoes extends Migration
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
            'tipo' => [
                'type'       => 'ENUM',
                'constraint' => ['dinheiro', 'produto'],
                'null'       => false
            ],
            'pessoa_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'valor' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true
            ],
            'comprovante' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ],
            'autorizacao' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
                'null'       => false
            ],
            'data_doacao' => [
                'type' => 'DATE',
                'null' => false
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pessoa_id', 'pessoas', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('doacoes');
    }

    public function down()
    {
        $this->forge->dropTable('doacoes');
    }
}
