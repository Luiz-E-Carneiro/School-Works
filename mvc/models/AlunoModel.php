<?php

namespace Model;

use Model\VO\AlunoVO;

final class AlunoModel extends Model {

    public function selectAll($vo) {
        $db = new Database();
        $query = "SELECT * FROM alunos";
        $data = $db->select($query);

        $arrayDados = [];

        foreach($data as $row) {
            $vo = new AlunoVO($row["id"], $row["nome"], $row["matricula"], $row["foto"]);
            array_push($arrayDados, $vo);
        }

        return $arrayDados;
    }

    public function selectOne($vo) {
        $db = new Database();
        $query = "SELECT * FROM alunos WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);

        return new AlunoVO($data[0]["id"], $data[0]["nome"], $data[0]["matricula"], $data[0]["foto"]);
    }

    public function insert($vo) {
        $db = new Database();

        if(empty($vo->getFoto())) {
            $query = "INSERT INTO alunos (nome, matricula) 
                        VALUES (:nome, :matricula)";
            $binds = [
                ":nome" => $vo->getNome(),
                ":matricula" => $vo->getMatricula()
            ];
        } else {
            $query = "INSERT INTO alunos (nome, matricula, foto) 
                        VALUES (:nome, :matricula, :foto)";
            $binds = [
                ":nome" => $vo->getNome(),
                ":matricula" => $vo->getMatricula(),
                ":foto" => $vo->getFoto()
            ];
        }
        
        return $db->execute($query, $binds);
    }

    public function update($vo) {
        $db = new Database();

        if(empty($vo->getFoto())){
            $query = "UPDATE alunos SET nome = :nome, 
                        matricula = :matricula WHERE id = :id";
            $binds = [
                ":nome" => $vo->getNome(),
                ":matricula" => $vo->getMatricula(),
                ":id" => $vo->getId()
            ];
        } else {
            $query = "UPDATE alunos SET nome = :nome, 
                        matricula = :matricula, foto = :foto 
                        WHERE id = :id";
            $binds = [
                ":nome" => $vo->getNome(),
                ":matricula" => $vo->getMatricula(),
                ":foto" => $vo->getFoto(),
                ":id" => $vo->getId()
            ];
        }

        return $db->execute($query, $binds);
    }

    public function delete($vo) {
        $db = new Database();
        $query = "DELETE FROM alunos WHERE id = :id";
        $binds = [":id" => $vo->getId()];

        return $db->execute($query, $binds);
    }

}