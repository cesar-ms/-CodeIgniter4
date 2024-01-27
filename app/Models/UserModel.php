<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function listarUsuarios()
    {
        $users  = $this->db->table('usuario')->get();
        return $users->getResult();
    }

    public function insertar($data)
    {
        $user  = $this->db->table('usuario');
        $user->insert($data);

        return $this->db->insertID();
    }

    public function obtenerUsuario($data)
    {
        $user  = $this->db->table('usuario');
        $user->where($data);
        return $user->get()->getResultArray();
    }

    public function actualizar($data, $id)
    {
        $user = $this->db->table('usuario');
        $user->set($data)->where('id', $id);

        return $user->update();
    }

    public function detalles($data)
    {
        $user  = $this->db->table('usuario');
        $user->where($data);
        return $user->get()->getResultArray();
    }

    public function obtenerUsuarios(){
        return $this->db->table('usuario')->select('id, usuario, nombre, ap_paterno, ap_materno, sexo, email, telefono,status, fecha_registro')->get()->getResultArray();
    }
}
