<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use CodeIgniter\Model;

class UserController extends BaseController
{

    protected $helpers = ['form'];

    public function index()
    {
        $mensaje = session('mensaje');
        $mens = ["mensaje" => $mensaje];

        return (view('view_html_header') . view('users/view_form_users', $mens) . view('view_html_footer'));
    }

    public function create()
    {
        $users = new UserModel();
        
        if(!$this->validate([
            "usuario" => 'required|is_unique[usuario.usuario]',
            "tipo" => 'required',
            "nombre" => 'required',
            "ap_paterno" => 'required',
            "ap_materno" => 'required',
            "sexo" => 'required',
            "email" => 'required|valid_email|is_unique[usuario.email]',
            "telefono" => 'required|numeric|min_length[10]|max_length[10]|is_unique[usuario.telefono]',
            "codigo_postal" => 'required|min_length[5]|max_length[5]|numeric',
            "colonia" => 'required',
            "delegacion" => 'required',
            "estado" => 'required'
        ])){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }

        $pass = pass();
        session()->setFlashdata($pass);

        $datos = [
            "usuario" => $_POST['usuario'],
            "password" => password_hash($pass, PASSWORD_DEFAULT),
            "tipo" => $_POST['tipo'],
            "nombre" => $_POST['nombre'],
            "ap_paterno" => $_POST['ap_paterno'],
            "ap_materno" => $_POST['ap_materno'],
            "sexo" => $_POST['sexo'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono'],
            "codigo_postal" => $_POST['codigo_postal'],
            "colonia" => $_POST['colonia'],
            "delegacion" => $_POST['delegacion'],
            "estado" => $_POST['estado'],
            "fecha_registro" => date('Y-m-d H:i:s'),
        ];

       $respuesta = $users->insertar($datos);

        if ($respuesta) {
            return redirect()->to(base_url('/registrar'))->with('mensaje','1');
        } else {
            return redirect()->to(base_url('/registrar'))->with('mensaje', '0');
        } 
    }

    public function delete($idUsuario)
    {
        $db = \Config\Database::connect();
        $respuesta = $db->table('usuario')->set('status', 'Inactivo')->where('id', $idUsuario)->update();

        if ($respuesta > 0) {
            return redirect()->to(base_url('/reporte'))->with('mensaje', '4');
        } else {
            return redirect()->to(base_url('/reporte'))->with('mensaje', '5');
        }
    }

    public function show($idUsuario)
    {
        $id = ['id' => $idUsuario];
        $users = new UserModel();
        $respuesta = $users->detalles($id);

        $mens = session('mensaje');
        $data = [
            "datos" => $respuesta,
            "mensaje" => $mens
        ];
        return (view('view_html_header') . view('users/view_show_users', $data) . view('view_html_footer'));
    }
}

function pass()
{
    $bytes = openssl_random_pseudo_bytes(4);
    $pass = bin2hex($bytes);
    return $pass;
}
