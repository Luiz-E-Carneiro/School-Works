<?php
namespace Controller;

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

final class UsuarioController extends Controller
{
    public function list(){
        $model = new UsuarioModel();
        $data = $model->selectAll(new UsuarioVO());

        $this->loadView("listaUsuarios", [
            "usuarios" => $data
        ]);
    }
    public function form(){
        $id = $_GET['id'] ?? 0;

        if(empty($id)){
            $vo = new UsuarioVO();
        } else {
            $model = new UsuarioModel();
            $vo = $model->selectOne(new UsuarioVO($id));
        }
        $this->loadView("formUsuario", [
            "usuario" => $vo
        ]);
    }
        
}
