<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Libraries\RequestCheck;
use App\Models\ProductLogModel;
use CodeIgniter\Files\File;
use Exception;

class Product extends BaseController
{
    protected $filters = ['before' => ['cors']];
    // private
    protected $RequestCheck;

    public function __construct()
    {

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        $this->RequestCheck = new RequestCheck();
    }
    public function index()
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url() . "login");
        }
        $productModel = new ProductModel();
        $data["total_product"] = $productModel->count_all_data()[0]["count"];
        return view('product/product_content', $data);
    }
    public function insert()
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Seession expired, please login"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url() . "login");
        }
        $data = $this->request->getPost();

        $insertData = array(
            "product_id" => htmlspecialchars($data["product_id"]),
            "product_name" => htmlspecialchars($data["product_name"]),
            "product_desc" => htmlspecialchars($data["product_description"]),
            "product_base_price" => htmlspecialchars($data["product_base_price"]),
            "product_sell_price" => htmlspecialchars($data["product_sell_price"]),
            "product_notes" => htmlspecialchars($data["product_notes"]),
            "product_status" => "AKTIF",
            "product_image" => WRITEPATH . 'uploads/default.png',
            "created_by" => session("id_pk_user"),
        );

        $validationRule = [
            'product_image' => [
                'rules' => [
                    'uploaded[product_image]',
                    'max_size[product_image,10000000]',
                    'mime_in[product_image, image/jpg,image/jpeg,image/gif,image/png]'
                ],
            ],
        ];
        if ($this->validate($validationRule)) {
            $img = $this->request->getFile('product_image');

            if (!$img->hasMoved()) {
                $insertData["product_image"] = WRITEPATH . 'uploads/' . $img->store();
            }
        }

        $productModel = new ProductModel();
        $productModel->save($insertData);
        return redirect()->to(base_url() . "product");
    }
    public function update()
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Seession expired, please login"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url() . "login");
        }
        $data = $this->request->getPost();

        $updateData = array(
            "id_pk_product" => htmlspecialchars($data["id_pk_product"]),
            "product_id" => htmlspecialchars($data["product_id"]),
            "product_name" => htmlspecialchars($data["product_name"]),
            "product_desc" => htmlspecialchars($data["product_description"]),
            "product_base_price" => htmlspecialchars($data["product_base_price"]),
            "product_sell_price" => htmlspecialchars($data["product_sell_price"]),
            "product_notes" => htmlspecialchars($data["product_notes"]),
            "updated_by" => session("id_pk_user"),
        );

        $validationRule = [
            'product_image' => [
                'rules' => [
                    'uploaded[product_image]',
                    'max_size[product_image,10000000]',
                    'mime_in[product_image, image/jpg,image/jpeg,image/gif,image/png]'
                ],
            ],
        ];
        if ($this->validate($validationRule)) {
            $img = $this->request->getFile('product_image');

            if (!$img->hasMoved()) {
                $updateData["product_image"] = WRITEPATH . 'uploads/' . $img->store();
            }
        }

        $productModel = new ProductModel();
        $productModel->save($updateData);
        return redirect()->to(base_url() . "product");
    }
    public function delete($id_pk_product)
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Seession expired, please login"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url() . "login");
        }
        $productModel = new ProductModel();
        $updateData = array(
            "id_pk_product" => $id_pk_product,
            "deleted_by" => session("id_pk_user"),
        );
        $productModel->save($updateData);
        $productModel->delete($id_pk_product);
        return redirect()->to(base_url() . "product");
    }
    public function data_datatable()
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $get_data = $this->request->getGet();

        $productModel = new ProductModel();
        $result = $productModel->dt_handle($get_data);

        foreach ($result["data"] as &$a) {
            try {
                $pngBinaryData = file_get_contents($a["product_image"]);
                $file = new File($a["product_image"]);
            } catch (Exception $e) {
                $default_path = WRITEPATH . 'uploads/default.png';
                $pngBinaryData = file_get_contents($default_path);
                $file = new File($default_path);
            }
            $a["product_image_mimetype"] = $file->getMimeType();
            $a["product_image_b64"] = base64_encode($pngBinaryData);
        }
        $response = array(
            "draw" => $get_data["draw"],
            "recordsTotal" => $productModel->count_all_data()[0]["count"],
            "recordsFiltered" => $result["amount"],
            "data" => $result["data"]
        );
        echo json_encode($response);
    }
    public function detail($id_pk_product)
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Seession expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $productModel = new ProductModel();
        $result = $productModel->detail($id_pk_product);
        echo json_encode(array(
            "status" => true,
            "data" => $result
        ));
        return;
    }
    public function data_select2()
    {

        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $get_data = $this->request->getGet();

        $productModel = new ProductModel();

        if (!isset($get_data["q"])) return;

        $result = $productModel->select2($get_data["q"]);

        $response = [];
        foreach ($result["data"] as $a) {
            $response[] = array(
                "id" => $a["id_pk_product"],
                "text" => $a["product_id"] . ". " . $a["product_name"],
                "detail" => $a
            );
        }
        echo json_encode($response);
    }
    public function product_in()
    {
        return view('product_log/product_in');
    }
    public function product_out()
    {
        return view('product_log/product_out');
    }
    public function logs($product_id)
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url() . "login");
        }
        return view('product_log/product_log_content', array("product_id" => $product_id));
    }
    public function get_log($product_id)
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $get_data = $this->request->getGet();

        $productLogModel = new ProductLogModel();
        $result = $productLogModel->dt_handle($get_data, $product_id);

        $response = array(
            "draw" => $get_data["draw"],
            "recordsTotal" => $productLogModel->count_all_data($product_id)[0]["count"],
            "recordsFiltered" => $productLogModel->count_all_data($product_id)[0]["count"],
            "data" => $result["data"]
        );
        echo json_encode($response);
    }
    public function delete_log($id_pk_product_log, $product_id)
    {
        if (!$this->RequestCheck->isAdmin()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $productLogModel = new ProductLogModel();
        $data = $productLogModel->get_detail_log($id_pk_product_log);

        $productLogModel->delete($id_pk_product_log);

        $productModel = new ProductModel();
        $productModel->update_product_qty(- ($data[0]["product_log_type"]), $product_id);

        return redirect()->to(base_url() . "product/log/" . $product_id);
    }
    public function export_log_excel($product_id)
    {
        if (!$this->RequestCheck->isUser()) {
            $msgSession = array(
                "status" => false,
                "msg" => "Session expired, please login"
            );
            echo json_encode($msgSession);
            return;
        }

        $productLogModel = new ProductLogModel();
        $data = $productLogModel->get_log_last_month($product_id);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="'.$product_id.'_exported_log_'.date("Ymdhis").'.csv"');
        header('Cache-Control: max-age=0');

        $fp = fopen('php://output', 'w');
        fputcsv($fp,array("ID Log","Product ID", "Product Name", "Product Log Type","Createad At", "Created By"));
        foreach ($data as $row) {
            fputcsv($fp, $row);
        }
        fclose($fp);
        exit;
    }
}
