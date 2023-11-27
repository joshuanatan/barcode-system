<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\RequestCheck;

class User extends BaseController
{
    // private
    protected $RequestCheck;

    public function __construct()
    {
        $this->RequestCheck = new RequestCheck();
    }
    public function index()
    {
        if (!$this->RequestCheck->isAdmin()) {
            $msgSession = array(
                "flashMsgStatus" => false,
                "flashMsgContent" => "You are not authorized to access this menu, this action is recorded, contact your IT team"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url());
        }

        $userModel = new UserModel();
        $data["total_user"] = $userModel->count_all_data();
        return view("user/user_content", $data);
    }
    public function insert()
    {
        if (!$this->RequestCheck->isAdmin()) {
            $msgSession = array(
                "flashMsgStatus" => false,
                "flashMsgContent" => "You are not authorized to access this menu, this action is recorded, contact your IT team"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url());
        }

        $data = $this->request->getPost();
        $temp_password = $data["user_email"] . date("YmdGisu");
        $insertData = array(
            "user_id" => $data["user_id"],
            "user_name" => $data["user_name"],
            "user_password" => hash("sha256", $temp_password),
            "user_email" => $data["user_email"],
            "user_role" => $data["user_role"],
            "user_notes" => $data["user_notes"],
            "created_by" => session("id_pk_user"),
        );
        $userModel = new UserModel();
        $insert_id = $userModel->save($insertData);

        $flashdata = array(
            "add_status" => isset($insert_id) ? true : false,
            "new_email" => $data["user_email"],
            "new_password" => $temp_password,
        );
        session()->setFlashdata($flashdata);

        return redirect()->to(base_url() . "user");
    }
    public function update()
    {
        if (!$this->RequestCheck->isAdmin()) {
            $msgSession = array(
                "flashMsgStatus" => false,
                "flashMsgContent" => "You are not authorized to access this menu, this action is recorded, contact your IT team"
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url());
        }

        $data = $this->request->getPost();
        $updateData = array(
            "id_pk_user" => $data["id_pk_user"],
            "user_id" => $data["user_id"],
            "user_name" => $data["user_name"],
            "user_email" => $data["user_email"],
            "user_role" => $data["user_role"],
            "user_email" => $data["user_email"],
            "user_notes" => $data["user_notes"],
            "updated_by" => session("id_pk_user"),
        );
        $userModel = new UserModel();
        $userModel->save($updateData);
        return redirect()->to(base_url() . "user");
    }
    public function delete($id_pk_user)
    {
        if (!$this->RequestCheck->isAdmin()) {
            $msgSession = array(
                "flashMsgStatus" => false,
                "flashMsgContent" => "You are not authorized to access this menu, this action is recorded, contact your IT team"
            );
            session()->setFlashdata($msgSession);
        }

        $userModel = new UserModel();
        $userModel->delete($id_pk_user);
        return redirect()->to(base_url() . "user");
    }
    public function login()
    {
        $data = $this->request->getPost();
        $loginData = array(
            "user_email" => $data["user_email"],
            "user_password" => $data["user_password"]
        );
        $userModel = new UserModel();
        $data = $userModel->login($loginData);

        if ($data["status"]) {

            $sessionData = array(
                "id_pk_user" => $data["data"][0]["id_pk_user"],
                "user_name" => $data["data"][0]["user_name"],
                "user_email" => $data["data"][0]["user_email"],
                "user_role" => $data["data"][0]["user_role"],
            );
            session()->set($sessionData);

            if ($data["data"][0]["user_need_change_pass"]) {
                return view("login/change_password_content");
            }


            $loginDate = date("Y-m-d H:i:s");
            $updateData = array(
                "id_pk_user" => session()->id_pk_user,
                "user_last_login" => $loginDate
            );
            $userModel = new UserModel();
            $userModel->save($updateData);

            $msgSession = array(
                "flashMsgStatus" => true,
                "flashMsgContent" => "Welcome " . session()->user_name . "!<br/> You are logged in at " . $loginDate
            );
            session()->setFlashdata($msgSession);
            return redirect()->to(base_url());
        } else {
            $sessionData = array(
                "flashMsgContent" => "Credentials are not found in database"
            );
            session()->setFlashdata($sessionData);
            return redirect()->to(base_url() . "login");
        }
    }
    public function change_password()
    {
        $requestData = $this->request->getPost();
        $loginData = array(
            "user_email" => $requestData["user_email"],
            "user_password" => $requestData["user_password"]
        );
        $userModel = new UserModel();
        $data = $userModel->login($loginData);

        if (!$data["status"]) {
            return view("login/change_password_content");
        }

        if (!($requestData["new_password"] == $requestData["confirm_new_password"])) {
            return view("login/change_password_content");
        }

        $updateData = array(
            "user_email" => $requestData["user_email"],
            "user_password_old" => hash("sha256", $requestData["user_password"]),
            "user_password_new" => hash("sha256", $requestData["new_password"]),
            "user_need_change_pass" => 0
        );
        $userModel = new UserModel();
        $userModel->update_password($updateData);

        $msgSession = array(
            "flashMsgStatus" => true,
            "flashMsgContent" => "Welcome " . session()->user_name . "!"
        );
        session()->setFlashdata($msgSession);
        return redirect()->to(base_url());
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url() . "login");
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

        $userModel = new UserModel();
        $result = $userModel->dt_handle($get_data);

        $response = array(
            "draw" => $get_data["draw"],
            "recordsTotal" => $userModel->count_all_data()[0]["count"],
            "recordsFiltered" => $result["amount"],
            "data" => $result["data"]
        );
        echo json_encode($response);
    }
}
