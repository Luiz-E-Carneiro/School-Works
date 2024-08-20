<?php
namespace Model\VO;
abstract class VO{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function steId($id){
        $this->id = $id;
    }

}