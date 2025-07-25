<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdutos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'auto_increment' => true],
            'imagem'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'nome'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'preco'        => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'descricao'    => ['type' => 'TEXT'],
            'link_compra'  => ['type' => 'TEXT'],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);


        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable("produtos");
    }
}
