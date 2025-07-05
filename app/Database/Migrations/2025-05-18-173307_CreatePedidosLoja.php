<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePedidosLoja extends Migration
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
            'pessoa_id' => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => false
            ],
            'valor_total' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pendente', 'enviado', 'entregue', 'cancelado'],
                'default'    => 'pendente',
                'null'       => false
            ],
            'data_pedido' => [
                'type' => 'TIMESTAMP',
                'null' => false
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pessoa_id', 'pessoas', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('pedidos_loja');
    }

    public function down()
    {
        $this->forge->dropTable('pedidos_loja');
    }
}
