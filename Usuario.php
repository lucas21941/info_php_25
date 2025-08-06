<?php

class Usuario {
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;
    public $id = 0;

    public function logar($login, $senha){
        $this->login = $login;
         $this->senha = $senha;
          $this->logado = true;
    }
      public function deslogar(){
        $this-> logado = false;
        
    }
       public function desativarUsuario($id, $status){
        $this-> status = true;
        $this-> id = $id;

    }
        public function ativarUsuario($id, $status){
            $this-> status = false;
            $this-> id = $id;
    }
         public function recuperarSenha($emailRecuperacao){
            $this-> emailRecuperacao = $emailRecuperacao;

     }
          public function alterarTipoPerfil($tipoPerfil){
            $this-> tipoPerfil = $tipoPerfil;

    } 
           public function alterarPermissoes($permissoes){
             $this-> permissoes = $permissoes;      
    }
 
           
}