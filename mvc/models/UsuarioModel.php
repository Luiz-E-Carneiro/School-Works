<?php

namespace Model;

use Model\VO\UsuarioVO;
use Model\Database;

final class UsuarioModel extends Model
{
    public function selectAll($vo){
        $db = new Database();
        $query = "SELECT * FROM usuario";
        $data = $db->select($query);

        $arrayList = [];

        foreach ($data as $row) {
            $vo = new UsuarioVO($row['id'], $row['login'], $row['senha'] );
            array_push($arrayList, $vo);
        }

        return $arrayList;
    }

    public function selectOne($vo){
        $db = new Database();
        $query = "SELECT * FROM usuario WHERE id = :id";
        $binds = [':id' => $vo->getId()];

        $data = $db->select($query, $binds);

        return new UsuarioVO($data[0]['id'], $data[0]['login'], $data[0]['senha']);

    }
    
    public function insert($vo){

    }
    public function update($vo){

    }
    public function delete($vo){

    }
}
