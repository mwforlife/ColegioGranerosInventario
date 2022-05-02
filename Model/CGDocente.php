<?php
class CGDocente{
    private $id;
    private $nombre;
    private $apellido;
    private $contacto;

    function CGDocente($id, $nombre, $apellido, $contacto){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contacto = $contacto;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getContacto(){
        return $this->contacto;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setContacto($contacto){
        $this->contacto = $contacto;
    }

}
?>