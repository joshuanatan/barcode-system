<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mstr_product';
    protected $primaryKey       = 'id_pk_product';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["product_id", "product_name", "product_desc", "product_base_price", "product_sell_price", "product_image", "product_notes", "product_status", "product_qty", "created_by", "updated_by", "deleted_by"];

    // Dates
    protected $useTimestamps = true;
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
        "id_pk_product",
        "product_id",
        "product_name",
        "product_desc",
        "product_base_price",
        "product_sell_price",
        "product_qty",
        "product_image",
        "product_notes"
    );
    protected $searchField = array(
        "product_id",
        "product_name",
        "product_desc",
        "product_base_price",
        "product_sell_price",
        "product_image",
        "product_notes",
        "product_qty",
        "product_status"
    );
    protected $selectFieldText = "";

    public function __construct()
    {
        $this->selectFieldText = implode(",", $this->selectField);
    }

    public function dt_handle($data)
    {
        $search_text = $data["search"]["value"];
        $offset = $data["start"];
        $amount = $data["length"];
        $order_col = $data["order"][0]["column"];
        $order_dir = $data["order"][0]["dir"];

        $db = db_connect();
        $builder = $db->table($this->table);
        $search_query = array();
        $searchField = $this->searchField;
        for ($a = 0; $a < count($searchField); $a++) {
            $search_query[$searchField[$a]] = $search_text;
        }
        $builder->select($this->selectFieldText)
            ->where("deleted_at = '0000-00-00 00:00:00'")
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

    public function count_all_data()
    {
        $db = db_connect();
        $data = $db->query("select count(id_pk_product) as count from mstr_product where deleted_at ='0000-00-00 00:00:00'")->getResult("array");
        $db->close();
        return $data;
    }

    //select2

    public function select2($search_text)
    {

        $db = db_connect();
        $builder = $db->table($this->table);
        $search_query = array();
        $searchField = $this->searchField;
        for ($a = 0; $a < count($searchField); $a++) {
            $search_query[$searchField[$a]] = $search_text;
        }
        $builder->select($this->selectFieldText)
            ->where("deleted_at = '0000-00-00 00:00:00'")
            ->groupStart()
            ->orLike($search_query)
            ->groupEnd();

        $result = $builder->get()->getResult("array");
        $db->close();
        return array(
            "data" => $result,
            "amount" => count($result)
        );
    }
    public function api($get_data = null)
    {
        $search_text = isset($get_data["search"]) ? $get_data["search"] : "";
        $db = db_connect();
        $builder = $db->table($this->table);
        $search_query = array();
        $searchField = $this->searchField;
        for ($a = 0; $a < count($searchField); $a++) {
            $search_query[$searchField[$a]] = $search_text;
        }
        $builder->select($this->selectFieldText)
            ->where("deleted_at = '0000-00-00 00:00:00'")
            ->groupStart()
            ->orLike($search_query)
            ->groupEnd();

        $result = $builder->get()->getResult("array");
        $db->close();
        return array(
            "data" => $result,
            "amount" => count($result)
        );
    }

    //insert log
    public function update_product_qty($amt, $product_id)
    {
        $sql = "update mstr_product set product_qty = product_qty + " . $amt . " where product_id=:product_id:";
        $db = db_connect();
        $db->query($sql, array(
            "product_id" => $product_id,
        ));
    }
    public function product_data($product_id)
    {
        $db = db_connect();
        return $db->query("select product_id, product_name, product_qty from mstr_product where product_id=:product_id:", array("product_id" => $product_id))->getResult("array");
    }

    public function delete_product($product_id){
        $sql = "delete from mstr_product where product_id = :product_id:";
        $db = db_connect();
        $db->query($sql, array("product_id" => $product_id));
    }
}
