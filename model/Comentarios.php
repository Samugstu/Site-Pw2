<?php

    class Comentario{
        public $id,$dia,$horario,$comentario, $idClient;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getDia(){
            return $this->dia;
        }
        public function setDia($dia){
            $this->dia = $dia;
        }
        public function getHorario(){
            return $this->horario;
        }
        public function setHorario($horario){
            $this->horario = $horario;
        }
        public function getComentario(){
            return $this->comentario;
        }
        public function setComentario($comentario){
            $this->comentario = $comentario;
        }
        public function getIdClient(){
            return $this->idClient;
        }
        public function setIdClient($idClient){
            $this->idClient = $idClient;
        }

    }
?>