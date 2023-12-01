<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Files\File;
use App\Libraries\RequestCheck;
use App\Models\ProductLogModel;
use CodeIgniter\RESTful\ResourceController;

class ProductAPI extends ResourceController
{
  protected $format    = 'json';
  protected $RequestCheck;

  public function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    $this->RequestCheck = new RequestCheck();
  }
  public function data()
  {
    $productModel = new ProductModel();
    $result = $productModel->api();


    foreach ($result["data"] as &$a) {
      $pngBinaryData = file_get_contents($a["product_image"]);
      $file = new File($a["product_image"]);
      $a["product_image_mimetype"] = $file->getMimeType();
      $a["product_image_b64"] = base64_encode($pngBinaryData);
    }

    $response = $result;
    return $this->respond($response);
  }
  public function product_in()
  {
    if (!$this->RequestCheck->isUser()) {
      return $this->failUnauthorized("Session Expired");
    }

    $data = $this->request->getPost();
    $product_id = $data["product_id"];
    $productModel = new ProductModel();
    $data = $productModel->product_data($product_id);
    if(count($data) == 0){
      $response = array(
        "status" => false,
        "msg" => "Product is not registered"
      );
      return $this->respond($response);
    }

    $insertData = array(
      "product_id" => htmlspecialchars($product_id),
      "product_log_type" => 1,
      "created_at" => date("Y-m-d H:i:s"),
      "created_by" => session("id_pk_user"),
    );

    $ProductLogModel = new ProductLogModel();
    $ProductLogModel->insert($insertData);

    
    $productModel->update_product_qty(1, $product_id);
    $data = $productModel->product_data($product_id);
    $response = array(
      "status" => true,
      "data" => array(
        "product_id" => htmlspecialchars($product_id),
        "product_qty" => $data[0]["product_qty"],
        "product_name" => $data[0]["product_name"],
        "created_at" => date("Y-m-d H:i:s"),
        "created_by" => session("id_pk_user"),
      )
    );

    return $this->respond($response);
  }
  public function product_out()
  {
    if (!$this->RequestCheck->isUser()) {
      return $this->failUnauthorized("Session Expired");
    }

    $data = $this->request->getPost();
    $product_id = $data["product_id"];
    $productModel = new ProductModel();
    $data = $productModel->product_data($product_id);
    if(count($data) == 0){
      $response = array(
        "status" => false,
        "msg" => "Product is not registered"
      );
      return $this->respond($response);
    }

    $insertData = array(
      "product_id" => htmlspecialchars($product_id),
      "product_log_type" => -1,
      "created_at" => date("Y-m-d H:i:s"),
      "created_by" => session("id_pk_user"),
    );

    $ProductLogModel = new ProductLogModel();
    $ProductLogModel->insert($insertData);

    
    $productModel->update_product_qty(-1, $product_id);
    $data = $productModel->product_data($product_id);
    $response = array(
      "status" => true,
      "data" => array(
        "product_id" => htmlspecialchars($product_id),
        "product_qty" => $data[0]["product_qty"],
        "product_name" => $data[0]["product_name"],
        "created_at" => date("Y-m-d H:i:s"),
        "created_by" => session("id_pk_user"),
      )
    );

    return $this->respond($response);
  }
}
