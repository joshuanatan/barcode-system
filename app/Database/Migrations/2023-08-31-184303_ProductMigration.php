<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductMigration extends Migration
{
    public function up()
    {
        $fields = array(
            "id_pk_product" => array(
                "type" => "int",
                "auto_increment" => true,
                "unsigned" => true
            ),
            "product_id" => array(
                "type" => "varchar",
                "constraint" => "20"
            ),
            "product_name" => array(
                "type" => "varchar",
                "constraint" => "100"
            ),
            "product_desc" => array(
                "type" => "varchar",
                "constraint" => "300"
            ),
            "product_base_price" => array(
                "type" => "int"
            ),
            "product_sell_price" => array(
                "type" => "int"
            ),
            "product_image" => array(
                "type" => "varchar",
                "constraint" => "50"
            ),
            "product_notes" => array(
                "type" => "varchar",
                "constraint" => "300"
            ),
            "product_status" => array(
                "type" => "varchar",
                "constraint" => "20"
            ),
            "product_qty" => array(
                "type" => "int",
            ),
            "created_at" => array(
                "type" => "datetime"
            ),
            "updated_at" => array(
                "type" => "datetime"
            ),
            "deleted_at" => array(
                "type" => "datetime"
            ),
            "created_by" => array(
                "type" => "int"
            ),
            "updated_by" => array(
                "type" => "int"
            ),
            "deleted_by" => array(
                "type" => "int"
            )
        );
        $this->forge->addKey("id_pk_product", true, true);
        $this->forge->addField($fields);
        $this->forge->createTable("mstr_product");
    }

    public function down()
    {
        $this->forge->dropTable("mstr_product");
    }
}
