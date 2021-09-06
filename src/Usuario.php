<?php
namespace App;

class Usuario {
    public $id;
    public $username;
    protected $password;
    public $name;
    public $email;
    public $phone;

    public function __construct($id, $username, $password, $name, $email, $phone) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function SetId($id) {
        $this->id = $id;
    }

    public function GetId() {
        return $this->id;
    }

    public function SetUsername($username) {
        $this->username = $username;
    }

    public function GetUsername() {
        return $this->username;
    }

    public function SetPassword($password) {
        $this->password = $password;
    }

    public function GetPassword() {
        return $this->password;
    }

    public function SetName($name) {
        $this->name = $name;
    }

    public function GetName() {
        return $this->name;
    }
    
    public function SetEmail($email) {
        $this->email = $email;
    }

    public function GetEmail() {
        return $this->email;
    }
    
    public function SetPhone($phone) {
        $this->phone = $phone;
    }

    public function GetPhone() {
        return $this->phone;
    }
    

}