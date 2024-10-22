<?php

namespace Model;

use Model\VO\DisciplinaVO;

final class DisciplinaModel extends Model
{

    public function selectAll($vo)
    {
        $db = new Database();
        $query = "SELECT * FROM disciplinas";
        $data = $db->select($query);

        $arrayDados = [];

        foreach ($data as $row) {
            $vo = new DisciplinaVO($row["id"], $row["nome"], $row['emenda']);
            array_push($arrayDados, $vo);
        }

        return $arrayDados;
    }

    public function selectOne($vo)
    {
        $db = new Database();
        $query = "SELECT * FROM disciplinas WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);

        return new DisciplinaVO($data[0]["id"], $data[0]["nome"], $data[0]['emenda']);
    }

    public function insert($vo)
    {
        $db = new Database();

        if (empty($vo->getEmenda())) {
            $query = "INSERT INTO disciplinas (nome) VALUES (:nome)";
            $binds = [":nome" => $vo->getNome()];
        } else {
            $query = "INSERT INTO disciplinas (nome, emenda) VALUES (:nome, :emenda)";
            $binds = [
                ":nome" => $vo->getNome(),
                ":emenda"=> $vo->getEmenda(),
            ];
        }


        return $db->execute($query, $binds);
    }

    public function update($vo)
    {
        $db = new Database();
        if (empty($vo->getEmenda())) {
            $query = "UPDATE disciplinas SET nome = :nome WHERE id = :id";
            $binds = [
                ":nome" => $vo->getNome(),
                ":id" => $vo->getId()
            ];
        } else {
            $query = "UPDATE disciplinas SET nome = :nome, emenda = :emenda WHERE id = :id";
            $binds = [
                ":nome" => $vo->getNome(),
                ":emenda"=> $vo->getEmenda(),
                ":id" => $vo->getId()
            ];
        }

        return $db->execute($query, $binds);
    }

    public function delete($vo)
    {
        $db = new Database();
        $query = "DELETE FROM disciplinas WHERE id = :id";
        $binds = [":id" => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
