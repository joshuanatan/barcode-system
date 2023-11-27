<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductLogModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_product_log';
    protected $primaryKey       = 'id_pk_product_log';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ["product_id","product_log_type","created_at", "created_by"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected $selectField = array(
        "product_id",
        "product_log_type",
        "created_at",
        "user_name"
    );
    protected $searchField = array(
        "product_id",
        "product_log_type",
        "created_at",
        "user_name"
    );
    protected $selectFieldText = "";

    public function __construct()
    {
        $this->selectFieldText = implode(",", $this->selectField);
    }

    public function dt_handle($data, $product_id)
    {
        $search_text = $data["search"]["value"];
        $offset = $data["start"];
        $amount = $data["length"];
        $order_col = $data["order"][0]["column"];
        $order_dir = $data["order"][0]["dir"];

        $db = db_connect();
        $builder = $db->table("v_product_log_std");
        $search_query = array();
        $searchField = $this->searchField;
        for ($a = 0; $a < count($searchField); $a++) {
            $search_query[$searchField[$a]] = $search_text;
        }
        $builder->select($this->selectFieldText)
            ->where("product_id", $product_id)
            ->groupStart()
            ->orLike($search_query)
            ->groupEnd()
            ->orderBy($this->selectField[$order_col], $order_dir)
            ->limit($amount, $offset);

        $result = $builder->get()->getResult("array");
        $db->close();
        return array(
            "data" => $result,
            "amount" => count($result)
        );
    }

    public function count_all_data($product_id)
    {
        $db = db_connect();
        $data = $db->query("select count(id_pk_product_log) as count from v_product_log_std where product_id =:product_id:", array("product_id" => $product_id))->getResult("array");
        $db->close();
        return $data;
    }


    public function count_stock_in_out_today($type){
        $sql = "select count(id_pk_product_log) as count, product_log_type, created_at from tbl_product_log where date(created_at)=curdate() and product_log_type = :type:";
        $db = db_connect();
        return $db->query($sql, array("type" => $type))->getResult("array");
    }
    public function count_stock_out_monthly(){
        $sql = "select * from v_monthly_count_out";
        $db = db_connect();
        return $db->query($sql)->getResult("array");
    }
    public function count_stock_in_monthly(){
        $sql = "select * from v_monthly_count_in";
        $db = db_connect();
        return $db->query($sql)->getResult("array");
    }
}
