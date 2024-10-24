<?php
    namespace PHP\Modelo;

    class Pessoa {
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;


        public function __construct(string $cpf, string $nome, string $telefone, string $endereco)
        {
            $this -> cpf = $cpf;
            $this -> nome = $nome;
            $this -> telefone = $telefone;
            $this -> endereco = $endereco;
        }//Fim do Método

        //Métodos Gets e Sets
        public function __get(string $nome):mixed //Get Altera o Dado
        { 
            return $this -> nome;
        }//Fim do Método Get

        public function __set(string $nomeVariavel, string $novoDado):void //Set Consulta o Dado
        {
            $this -> nomeVariavel = $novoDado;
        }//Fim do Método Set

        public function imprimir():string
        {
            return  "<br>CPF: ".$this -> cpf.
                    "<br>Nome: ".$this -> nome.
                    "<br>Telefone: ".$this -> telefone.
                    "<br>Endereço: ".$this -> endereco;
        }//Fim do Imprimir



    
    }//Fim da Classe




?>