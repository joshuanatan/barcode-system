<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mstr_user';
    protected $primaryKey       = 'id_pk_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ["user_id", "user_name", "user_password", "user_email", "user_role", "user_notes", "user_last_login", "user_need_change_pass", "created_by", "updated_by", "deleted_by"];

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

    public function login($data){
        $user_email = $data["user_email"];
        $user_password = hash("sha256",$data["user_password"]);
        $sql = "select id_pk_user, user_name, user_email, user_role, user_need_change_pass from mstr_user where user_email=:email: and user_password=:password: and deleted_at ='0000-00-00 00:00:00'";
        $db = db_connect();
        $data = $db->query($sql, array(
            "email" => $user_email,
            "password" => $user_password,          
        ))->getResult("array");

        if(count($data) == 0){
            $data = array(
                "status" => false,
                "data" => $data
            );
            return $data;
        }
        
        $set = array(
            "user_last_login" => date("Y-m-d H:i:s")
        );
        $where = array(
            "user_email" => $user_email,
            "user_password" => $user_password,     
        );
        $db->table("mstr_user")->update($set, $where);
        $db->close();

        $data = array(
            "status" => true,
            "data" => $data
        );
        return $data;
    }
    public function get_all_data(){
        $db = db_connect();
        $data = $db->query("select id_pk_user, user_id, user_name, user_email, user_role, user_notes, user_last_login, updated_at from mstr_user where deleted_at ='0000-00-00 00:00:00' order by user_name")->getResult("array");
        $db->close();
        return $data;
    }
    public function count_all_data(){
        $db = db_connect();
        $data = $db->query("select count(id_pk_user) as count from mstr_user where deleted_at ='0000-00-00 00:00:00'")->getResult("array");
        $db->close();
        return $data;
    }
    public function update_password($data){
        $db = db_connect();
        $builder = $db->table("mstr_user");
        $field = array(
            "user_password" => $data["user_password_new"],
            "user_need_change_pass" => 0,
        );
        $where = array(
            "user_email" => $data["user_email"],
            "user_password" => $data["user_password_old"]
        );
        $builder->set($field);
        $builder->where($where);
        $builder->update();
    }
    protected $selectField = array(
        "id_pk_user",
        "user_id",
        "user_name",
        "user_email",
        "user_role",
        "user_email",
        "user_notes",
        "user_last_login",
        "user_need_change_pass"
    );
    protected $searchField = array(
        "user_id",
        "user_name",
        "user_email",
        "user_role",
        "user_email",
        "user_notes",
        "user_last_login",
        "user_need_change_pass"
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
}
