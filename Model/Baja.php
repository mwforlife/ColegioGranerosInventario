<?php
class DeBaja{
    private $id;
    private $id_com;
    private $fecha_baja;
    private $motivo;

    function DeBaja($id, $id_com, $fecha_baja, $motivo){
        $this->id = $id;
        $this->id_com = $id_com;
        $this->fecha_baja = $fecha_baja;
        $this->motivo = $motivo;
    }

    public function getId(){
        return $this->id;
    }

    public function getId_com(){
        return $this->id_com;
    }

    public function getFecha_baja(){
        return $this->fecha_baja;
    }

    public function getMotivo(){
        return $this->motivo;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setId_com($id_com){
        $this->id_com = $id_com;
    }

    public function setFecha_baja($fecha_baja){
        $this->fecha_baja = $fecha_baja;
    }

    public function setMotivo($motivo){
        $this->motivo = $motivo;
    }
}