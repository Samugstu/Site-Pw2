<?php

class Jogador{
    private $id,$nomeJoga,$nascJoga,$posicaoJoga,$nacionalidadeJoga,$numeroJoga,$imagem,$favorito,$posicaoDJoga;

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getNomeJoga() {
        return $this->nomeJoga;
    }

    public function setNomeJoga($nomeJoga) {
        $this->nomeJoga = $nomeJoga;
    }

    public function getNascJoga() {
        return $this->nascJoga;
    }

    public function setNascJoga($nascJoga) {
        $this->nascJoga = $nascJoga;
    }
    public function getPosicaoJoga() {
        return $this->posicaoJoga;
    }

    public function setPosicaoJoga($posicaoJoga) {
        $this->posicaoJoga = $posicaoJoga;
    }
    public function getNacionalidadeJoga() {
        return $this->nacionalidadeJoga;
    }

    public function setNacionalidadeJoga($nacionalidadeJoga) {
        $this->nacionalidadeJoga = $nacionalidadeJoga;
    }

    public function setNumeroJoga($numeroJoga) {
        $this->numeroJoga = $numeroJoga;
    }

    public function getnumeroJoga() {
        return $this->numeroJoga;
    }
    
    public function setFavorito($favorito) {
       $this->favorito = $favorito;
   }

   public function getFavorito() {
       return $this->favorito;
   }
    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    public function generateToken() {
        return bin2hex(random_bytes(16));   
    }
    public function salvarImagem($novo_nome){

        if(empty($_FILES['foto']['size']) != 1){

            if($novo_nome == ""){
                $novo_nome = md5(time()).".jpg";
            }

            $diretorio = "../../img/Jogador/";

            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'],$nomeCompleto);
            return $novo_nome;
        }
        else{
            return $novo_nome;
        }
    }
    public function getPosicaoDJoga() {
        return $this->posicaoDJoga;
    }

    public function setPosicaoDJoga($posicaoDJoga) {
        $this->posicaoDJoga = $posicaoDJoga;
    }
    
    
}

?>