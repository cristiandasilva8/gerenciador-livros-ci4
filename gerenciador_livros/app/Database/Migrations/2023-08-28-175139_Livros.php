<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Livros extends Migration
{
    public function up()
    {
        /**
         * Particular Events table. //nome, json, midia
         */
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'titulo'            => ['type' => 'varchar', 'constraint' => 255],
            'autor'             => ['type' => 'varchar', 'constraint' => 255],
            'ano_publicacao'    => ['type' => 'INT', 'constraint' => 11],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('livros', true);
    }

    public function down()
    {
        $this->forge->dropTable('livros', true);
    }
}
