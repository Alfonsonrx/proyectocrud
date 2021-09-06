<?php 
namespace App;
use Exception;

class UserDao implements CRUD {

    public function create($user)
    {
        $con = new ConnConfig;
        $status = null;
        try {
            $Conn = $con->Connect();
            $Conn->query("INSERT INTO usuarios(nombreusuario,passwordusuario,nombrereal,email,Phone) VALUES($user->username,$user->password,$user->name, $user->email, $user->phone)");
            $status = "Ha sido ingresado exitosamente";
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Ha ocurrido un error al ingresar";
        }
        return $status;
    }

    public function listar()
    {
        $list = array();
        $con = new ConnConfig;
        try {
            $Conn = $con->Connect();
            $rs = $Conn->query("SELECT * FROM `usuarios`");
            while($row = $rs->fetch_assoc()) {
                $user = new Usuario($row['idusuario'], $row['nombreusuario'], $row['passwordusuario'], $row['nombrereal'], $row['email'], $row['Phone']);
                array_push($list, $user);
            }
        } catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
        return $list;
    }
    
    public function update($id, $user)
    {
        $con = new ConnConfig;
        $status = null;
        try {
            $Conn = $con->Connect();
            $Conn->query("UPDATE `usuarios` SET `nombreusuario`=$user->username,`passwordusuario`=$user->password,`nombrereal`=$user->name,`email`=$user->email,`Phone`=$user->phone WHERE `idusuario`=$id)");
            $status = "Ha sido actualizado exitosamente";
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Ha ocurrido un error al actualizar";
        }
        return $status;
    }

    public function delete($id)
    {
        $con = new ConnConfig;
        $status = null;
        try {
            $Conn = $con->Connect();
            $Conn->query("DELETE FROM `usuarios` WHERE `idusuario`=$id");
            $status = "Ha sido actualizado exitosamente";
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Ha ocurrido un error al actualizar";
        }
        return $status;
    }

    public function search($email)
    {
        $con = new ConnConfig;
        try {
            $Conn = $con->Connect();
            $rs = $Conn->query("SELECT * FROM usuarios WHERE email=$email");
            while($row = $rs->fetch_assoc()) {
                $user = new Usuario($row['idusuario'], $row['nombreusuario'], $row['passwordusuario'], $row['nombrereal'], $row['email'], $row['Phone']);
            }
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
        return $user;
    }
}