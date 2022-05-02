<?php
class CGPrestamos{
    private $id;
    private $id_com;
    private $id_doc;
    private $id_est;
    private $fecha_prest;
    private $fecha_dev;
    private $observacion;

    function CGPrestamos($id, $id_com, $id_doc, $id_est, $fecha_prest, $fecha_dev, $observacion){
        $this->id = $id;
        $this->id_com = $id_com;
        $this->id_doc = $id_doc;
        $this->id_est = $id_est;
        $this->fecha_prest = $fecha_prest;
        $this->fecha_dev = $fecha_dev;
        $this->observacion = $observacion;
    }

    public function getId(){
        return $this->id;
    }

    public function getId_com(){
        return $this->id_com;
    }

    public function getId_doc(){
        return $this->id_doc;
    }

    public function getId_est(){
        return $this->id_est;
    }

    public function getFecha_prest(){
        return $this->fecha_prest;
    }

    public function getFecha_dev(){
        return $this->fecha_dev;
    }

    public function getObservacion(){
        return $this->observacion;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setId_com($id_com){
        $this->id_com = $id_com;
    }

    public function setId_doc($id_doc){
        $this->id_doc = $id_doc;
    }

    public function setId_est($id_est){
        $this->id_est = $id_est;
    }

    public function setFecha_prest($fecha_prest){
        $this->fecha_prest = $fecha_prest;
    }

    public function setFecha_dev($fecha_dev){
        $this->fecha_dev = $fecha_dev;
    }

    public function setObservacion($observacion){
        $this->observacion = $observacion;
    }
    
}

?>