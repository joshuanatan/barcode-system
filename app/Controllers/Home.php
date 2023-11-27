<?php

namespace App\Controllers;
use App\Libraries\RequestCheck;
use App\Models\ProductLogModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    protected $RequestCheck;

    public function __construct(){
        $this->RequestCheck = new RequestCheck();
    }

    public function index()
    {
        if(!$this->RequestCheck->isUser()){
            $sessionMsg = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            session()->setFlashdata($sessionMsg);
            return redirect()->to(base_url()."login");
        }
        return view('dashboard/dashboard_content');
    }

    public function dashboard(){
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "You are not authorized"
            );
            echo json_encode($msgSession);
            return;
        }
        $productModel = new ProductModel();
        $total_product = $productModel->count_all_data()[0]["count"];

        $productLogModel = new ProductLogModel();
        $stock_out = $productLogModel->count_stock_in_out_today(-1)[0]["count"];
        $stock_in = $productLogModel->count_stock_in_out_today(1)[0]["count"];

        $stock_out_monthly = $productLogModel->count_stock_out_monthly();
        $stock_in_monthly = $productLogModel->count_stock_in_monthly();
        $stock_out_monthly_array = [];
        $stock_in_monthly_array = [];

        for($a = 0; $a<12; $a++){
            //loop 12 times since 12 months
            $stock_out_monthly_array["label"][$a] = $stock_out_monthly[$a]["month_name"];
            $stock_out_monthly_array["amt"][$a] = $stock_out_monthly[$a]["count"];
            $stock_in_monthly_array["label"][$a] = $stock_in_monthly[$a]["month_name"];
            $stock_in_monthly_array["amt"][$a] = $stock_in_monthly[$a]["count"];
        }
        $result = array(
            "widget" => array(
                array(
                    "value" => $total_product,  
                    "title" => " Product"
                ),
                array(
                    "value" => $stock_out,
                    "title" => "Today Stock Out"
                ),
                array(
                    "value" => $stock_in,
                    "title" => "Today Stock In"
                )
            ),
            "bar_chart" => array(
                array(
                    "label" => $stock_out_monthly_array["label"],
                    "data" => $stock_out_monthly_array["amt"],
                    "label_name" => "Amount of Stock Out",
                ),
                array(
                    "label" => $stock_in_monthly_array["label"],
                    "data" => $stock_in_monthly_array["amt"],
                    "label_name" => "Amount of Stock In",
                )
            )
        );
        echo json_encode($result);
        return;
    }
}
