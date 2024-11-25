<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

use function PHPSTORM_META\type;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_pelanggan" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "nama_pelanggan" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "alamat_palanggan" => [
                "type" => "text",
            ],
            "no_telp" => [
                "type" => "VARCHAR",
                "constraint" => "15",
            ],
            "created_at" => [
                "type" => "DATETIME",
                "NULL" => true,
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "NULL" => true,
            ],
            "deleted_at" => [
                "type" => "DATETIME",
                "NULL" => true,
            ],
        ]);

        $this->forge->addKey("id_pelanggan", true);
        $this->forge->createTable("pelanggan");
    }

    public function down()
    {
        $this->forge->dropTable("pelanggan");
    }
}
