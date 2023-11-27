<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductLogMigration extends Migration
{
    public function up()
    {
        $fields = array(
            "id_pk_product_log" => array(
                "type" => "int",
                "auto_increment" => true,
                "unsigned" => true
            ),
            "product_id" => array(
                "type" => "varchar",
                "constraint" => "20"
            ),
            "product_log_type" => array(
                "type" => "int", // 1 for barang masuk, -1 for barang keluar
            ),
            "created_at" => array(
                "type" => "datetime"
            ),
            "created_by" => array(
                "type" => "int"
            ),
        );
        $this->forge->addKey("id_pk_product_log", true, true);
        $this->forge->addField($fields);
        $this->forge->createTable("tbl_product_log");
    }

    public function down()
    {
        $this->forge->dropTable("tbl_product_log");
    }
}
