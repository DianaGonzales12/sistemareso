<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    public function login($nombre_usuario, $contrasenia)
    {
        $db = \Config\Database::connect();
        $mensaje = '';
        $query = $db->query("CALL sp_login(?, ?, @mensaje)", [$nombre_usuario, $contrasenia]);
        
        $result = $db->query("SELECT @mensaje AS mensaje")->getRow();
        
        if ($result) {
            $mensaje = $result->mensaje;
        }
        return $mensaje;
    }
}
