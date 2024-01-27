<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ReporteController extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        $datos = $users->listarUsuarios();

        $mens = session('mensaje');

        $data = ["datos" => $datos,
                "mensaje" => $mens
                ];

        return (view('view_html_header') . view('reportes/view_reportes',$data) . view('view_html_footer'));
    }

    public function edit($idUsuario)
    {
        $id = ['id' => $idUsuario];
        $users = new UserModel();
        $respuesta = $users->obtenerUsuario($id);


        $mens = session('mensaje');
        $data = ["datos" => $respuesta,
            "mensaje" => $mens
        ];

        return (view('view_html_header') . view('users/view_update_users', $data) . view('view_html_footer'));
    }

    public function update()
    {
        if (!$this->validate([
            "usuario" => 'required',
            "tipo" => 'required',
            "nombre" => 'required',
            "ap_paterno" => 'required',
            "ap_materno" => 'required',
            "sexo" => 'required',
            "email" => 'required|valid_email',
            "telefono" => 'required|numeric|min_length[10]|max_length[10]',
            "codigo_postal" => 'required|min_length[5]|max_length[5]|numeric',
            "colonia" => 'required',
            "delegacion" => 'required',
            "estado" => 'required',
            "status" => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $datos = [
            "usuario" => $_POST['usuario'],
            "password" => $_POST['password'],
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
            "status" => $_POST['status'],
            "fecha_registro" => $_POST['fecha_registro'],
        ];

        $id = $_POST['id'];

        $users = new UserModel();

        $respuesta = $users->actualizar($datos,$id);

        if ($respuesta) {
            return redirect()->to(base_url('/reporte'))->with('mensaje', '2');
        } else {
            return redirect()->to(base_url('/reporte'))->with('mensaje', '3');
        }
    }


    public function descargarDatos()
    {
        $users = new UserModel();
        $datos = $users->obtenerUsuarios();

        $this->generarYDescargarCSV($datos);
    }

    private function generarYDescargarCSV($datos)
    {

        $filename = 'datos_tabla.csv';

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');

        fputcsv($output, array('ID', 'Nombre de usuario', 'Nombre','Apellido Paterno','Apellido Materno', 'Sexo', 'Correo','Telefono','Status','Fecha de registro'));

        foreach ($datos as $fila) {
            fputcsv($output, $fila);
        }

        fclose($output);

        exit;
    }



}
