<?php
namespace App;


interface CRUD {
    public function create($user);
    public function list();
    public function update($id, $user);
    public function delete($id);
    public function search($email);
}