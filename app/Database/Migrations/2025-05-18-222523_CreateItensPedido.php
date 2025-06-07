<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItensPedido extends Migration
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
            'pedido_id' => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => false
            ],
            'produto_id' => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => false
            ],
            'quantidade' => [
                'type'    => 'INT',
                'default' => 1,
                'null'    => false
            ],
            'preco_unitario' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pedido_id', 'pedidos_loja', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('produto_id', 'produtos', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('itens_pedido');
    }

    public function down()
    {
        $this->forge->dropTable('itens_pedido');
    }
}
