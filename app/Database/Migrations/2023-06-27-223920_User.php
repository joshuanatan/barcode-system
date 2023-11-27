<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $columns = array(
            "id_pk_user" => array(
                "type" => "int",
                "unsigned" => true,
                "auto_increment" => true
            ),
            "user_id" => array(
                "type" => "varchar",
                "constraint" => "15"
            ),
            "user_name" => array(
                "type" => "varchar",
                "constraint" => "50"
            ),
            "user_password" => array(
                "type" => "varchar",
                "constraint" => "64"
            ),
            "user_email" => array(
                "type" => "varchar",
                "constraint" => "100"
            ),
            "user_mobile" => array(
                "type" => "varchar",
                "constraint" => "20"
            ),
            "user_role" => array(
                "type" => "varchar", //ROOT / USER
                "constraint" => "100"
            ),
            "user_email" => array(
                "type" => "varchar",
                "constraint" => "100"
            ),
            "user_notes" => array(
                "type" => "varchar",
                "constraint" => "500"
            ),
            "user_status" => array(
                "type" => "varchar", //ACTIVE/SUSPENDED
                "constraint" => "100"
            ),
            "user_need_change_pass" => array(
                "type" => "smallint",
                "default" => 1
            ),
            "user_valid_until" => array(
                "type" => "datetime"
            ),
            "user_last_login" => array(
                "type" => "datetime"
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
        $this->forge->addField($columns);
        $this->forge->addKey("id_pk_user", true, true);
        $this->forge->createTable("mstr_user");
    }

    public function down()
    {
        $this->forge->dropTable("mstr_user");
    }
}
