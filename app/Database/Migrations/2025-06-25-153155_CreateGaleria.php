<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGaleria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'imagem'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'titulo'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'descricao'  => ['type' => 'TEXT', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('galeria');
    }

    public function down()
    {
        $this->forge->dropTable("galeria");
    }
}
