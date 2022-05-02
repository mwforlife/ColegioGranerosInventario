<?php
class CGUser{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $login;
    private $password;
    private $tipo;
    private $toten;
    private $modify;

    function CGUser($id, $nombre, $apellido, $email, $login, $password, $tipo, $toten, $modify){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
        $this->tipo = $tipo;
        $this->toten = $toten;
        $this->modify = $modify;
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

    public function getEmail(){
        return $this->email;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getToten(){
        return $this->toten;
    }

    public function getModify(){
        return $this->modify;
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

    public function setEmail($email){
        $this->email = $email;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setToten($toten){
        $this->toten = $toten;
    }

    public function setModify($modify){
        $this->modify = $modify;
    }

}

?>