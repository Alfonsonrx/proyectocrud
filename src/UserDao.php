<?php 
namespace App;
use Exception;

class UserDao implements CRUD {

    public function create($user)
    {
        $con = new ConnConfig;
        $status = null;
        $un = $user->GetUsername(); // Get the username
        $pw = $user->GetPassword(); // Get the password
        $n = $user->GetName(); // Get the name
        $em = $user->GetEmail(); // Get the email
        $ph = $user->GetPhone(); // Get the phone
        try {
            $Conn = $con->Connect();
            $Conn->query("INSERT INTO `usuarios`(`idusuario`, `nombreusuario`, `passwordusuario`, `nombrereal`, `email`, `Phone`) VALUES ('NULL','$un','$pw','$n','$em','$ph')");
            if($Conn->errno) {
				echo "Connection failed, MySQL: (" . $Conn->errno . " ) " . $Conn->error;
                $status = "Error to Connect";
			} else {
                $status = "Succesfully inserted";
            }
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Insert error";
        }
        return $status;
    }

    public function list()
    {
        $list = array();
        $con = new ConnConfig;
        try {
            $Conn = $con->Connect();
            $rs = $Conn->query("SELECT * FROM `usuarios`");
            while($row = $rs->fetch_assoc()) {
                $user = new User($row['idusuario'], $row['nombreusuario'], $row['passwordusuario'], $row['nombrereal'], $row['email'], $row['Phone']);
                array_push($list, $user);
            }
        } catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
        return $list;
    }
    
    public function read($id)
    {
        $con = new ConnConfig;
        try {
            $Conn = $con->Connect();
            $rs = $Conn->query("SELECT * FROM `usuarios` WHERE `idusuario`=$id");
            while($row = $rs->fetch_assoc()) {
                $user = new User($row['idusuario'], $row['nombreusuario'], $row['passwordusuario'], $row['nombrereal'], $row['email'], $row['Phone']);
            }
        } catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
        return $user;
    }

    public function update($id, $user)
    {
        $con = new ConnConfig;
        $status = null;
        $un = $user->GetUsername(); // Get the username
        $pw = $user->GetPassword(); // Get the password
        $n = $user->GetName(); // Get the name
        $em = $user->GetEmail(); // Get the email
        $ph = $user->GetPhone(); // Get the phone
        try {
            $Conn = $con->Connect();
            $Conn->query("UPDATE `usuarios` SET `nombreusuario`='$un',`passwordusuario`='$pw',`nombrereal`='$n',`email`='$em',`Phone`='$ph' WHERE idusuario='$id'") or die($Conn->error);
            $status = "Succesfully Updated";
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Update error";
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
            $status = "Sucessfully Deleted";
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
            $status = "Delete error, try later";
        }
        return $status;
    }

    public function search($email)
    {
        $con = new ConnConfig;
        try {
            $Conn = $con->Connect();
            $rs = $Conn->query("SELECT * FROM `usuarios` WHERE `email` = '$email'") or die($Conn->error);
            while($row = $rs->fetch_assoc()) {
                $user = new User($row['idusuario'], $row['nombreusuario'], $row['passwordusuario'], $row['nombrereal'], $row['email'], $row['Phone']);
            }
        }catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
        return $user;
    }
}