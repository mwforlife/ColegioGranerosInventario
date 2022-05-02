<?php
class EstadoComponente{
    private $id;
    private $nombre;

    function EstadoComponente($id, $nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

}