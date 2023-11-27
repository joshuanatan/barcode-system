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
