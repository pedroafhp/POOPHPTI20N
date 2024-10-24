<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    Class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, float $precoTotal)
        {
            parent:: __construct($cpf,$nome,$telefone,$endereco);
            $this -> precoTotal = $precoTotal;
        }//Fim do Construtor

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
            return parent::imprimir().
                "<br>Preço Total: ".$this -> precoTotal;
        }//Fim do Imprimir
    
    
    
    }//Fim da Classe





?>