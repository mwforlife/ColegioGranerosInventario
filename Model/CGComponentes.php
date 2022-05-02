<?php
    class CGComponentes{
        private $id;
        private $folio;
        private $nombre;
        private $ubicacion;
        private $descripcion;
        private $observacion;
        private $tipo;
        private $estado;
        private $status;


        function CGComponentes($id, $folio, $nombre, $ubicacion, $descripcion, $observacion, $tipo, $estado, $status){
            $this->id = $id;
            $this->folio = $folio;
            $this->nombre = $nombre;
            $this->ubicacion = $ubicacion;
            $this->descripcion = $descripcion;
            $this->observacion = $observacion;
            $this->tipo = $tipo;
            $this->estado = $estado;
            $this->status = $status;
        }

        public function getId(){
            return $this->id;
        }

        public function getFolio(){
            return $this->folio;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getUbicacion(){
            return $this->ubicacion;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getObservacion(){
            return $this->observacion;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setFolio($folio){
            $this->folio = $folio;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setUbicacion($ubicacion){
            $this->ubicacion = $ubicacion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setObservacion($observacion){
            $this->observacion = $observacion;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function setStatus($status){
            $this->status = $status;
        }

    }

?>