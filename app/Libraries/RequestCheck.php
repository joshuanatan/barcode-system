<?php

namespace App\Libraries;

class RequestCheck
{
    public function isAdmin(){
        if($this->isUser()){
            return session()->user_role == "ADMINISTRATOR";
        }
    }
    public function isUser(){
        if(!isset(session()->id_pk_user)){
            return false;
        }
        return true;
    } 
    public function checkIncomingRequest(){
        
    }
}
