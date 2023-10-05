<?php
class Viagens{
    private $conn;
    private $cod_viagem;
    private $nome;
    private $datev;
    private $preco;
    private $duracao;
    private $categoria;
    private $img;

    function __construct($conn){
        $this->conn = $conn;
        
    }
    function get_codviagem(){
        return $this->codviagem;
    }
    function set_codviagem($codviagem){
        $this->codviagem = $codviagem; 
    }


    function get_nome(){
        return $this->nome;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }


    function get_datav(){
        return $this->datav;
    }
    function set_datav($datav){
        $this->datav = $datav;
    }

    
    function get_preco(){
        return $this->preco;
    }
    function set_preco($preco){
        $this->preco = $preco;
    }

    
    function get_duracao(){
        return $this->duracao;
    }
    function set_duracao($duracao){
        $this->duracao = $duracao;
    }

    
    function get_categoria(){
        return $this->categoria;
    }
    function set_categoria($categoria){
        $this->categoria = $categoria;
    }

    
    function get_img(){
        return $this->img;
    }
    function set_img($img){
        $this->img = $img;
    }


    function cadastrarviagem($codviagem, $nome, $datav, $preco, $duracao , $categoria, $img) {
        $sql = "INSERT INTO viagens (codviagem, nome, datav, preco, duracao , categoria, img) VALUES 
            (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssss", $codviagem, $nome, $datav, $preco, $duracao , $categoria, $img);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
