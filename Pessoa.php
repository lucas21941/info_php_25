<?php

class Pessoa {
    public $nome = "";
    public $sexo = "";
    public $nacionalidade = "";
    public $dataNascimento = "";
    public $estadoCivil = "";
    public $nomeMae = "";
    public $nomePai = "";
    public $cpf = "";
    public $escolaridade = "";
    public $telefone = "";
    public $eMail = "";

    public function obterNome(){
        return $this->nome;
    }

    public function editarNome($nome){
            return $this->nome = $nome;
    }
    
    public function obterSexo(){
            return $this->nome;
    }

    public function editarSexo($sexo){
            return $this->sexo = $sexo;
    }


    public function obterNacionalidade(){
        return $this->nacionalidade;
    }


    public function editarNacionalidade($nacionalidade){
        return $this->nacionalidade = $nacionalidade;
    }


    public function obterDataNascimento(){
        return $this->dataNascimento;
    }


    public function editarDataNascimento($dataNascimento){
        return $this->dataNascimento = $dataNascimento;
    }


    public function obterEstadoCivil(){
        return $this->estadoCivil;
    }


    public function editarEstadoCivil($estadoCivil){
        return $this->estadoCivil = $estadoCivil;
    }

    public function obterNomeMae(){
        return $this->nomeMae;
    }


    public function editarNomeMae($nomeMae){
        return $this->nomeMae = $nomeMae;

    }

     public function obterNomePai(){
        return $this->nomePai;
    }


    public function editarNomePai($nomePai){
        return $this->nomePai = $nomePai;
    }

    

     public function obterCpf(){
        return $this->cpf;
    }


    public function editarCpf($cpf){
        return $this->cpf = $cpf;
    }

    public function obterEscolaridade(){
        return $this-> escolaridade;
    }


    public function editarEscolaridade($escolaridade){
        return $this->escolaridade = $escolaridade;
    }

    public function obterTelefone(){
        return $this->telefone;
    }


    public function editarTelefone($telefone){
        return $this->telefone = $telefone;
    }

    public function obterEmail(){
        return $this->eMail;
    }


    public function editarEmail($eMail){
        return $this->eMail = $eMail;
    }

}

    