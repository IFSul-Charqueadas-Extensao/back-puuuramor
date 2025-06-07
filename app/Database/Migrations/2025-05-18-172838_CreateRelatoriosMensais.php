<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRelatoriosMensais extends Migration
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
            'mes' => [
                'type'       => 'INT',
                'constraint' => 2,
                'null'       => false
            ],
            'ano' => [
                'type'       => 'INT',
                'constraint' => 4,
                'null'       => false
            ],
            'resgates' => [
                'type' => 'INT',
                'null' => true
            ],
            'castracoes' => [
                'type' => 'INT',
                'null' => true
            ],
            'adocoes' => [
                'type' => 'INT',
                'null' => true
            ],
            'perdas' => [
                'type' => 'INT',
                'null' => true
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true
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
        $this->forge->createTable('relatorios_mensais');
    }

    public function down()
    {
        $this->forge->dropTable('relatorios_mensais');
    }
}
