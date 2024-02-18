<?php

class Favorito{
    private $idFavorito,$idJoga,$idClient;

    
    public function getIdFavorito() {
        return $this->idFavorito;
    }

    public function setIdFavorito($idFavorito) {
        $this->idFavorito = $idFavorito;
    }
    public function getIdJoga() {
        return $this->idJoga;
    }

    public function setIdJoga($idJoga) {
        $this->idJoga = $idJoga;
    }
    public function getIdClient() {
        return $this->idClient;
    }

    public function setIdClient($idClient) {
        $this->idClient= $idClient;
    }
   
}

?>