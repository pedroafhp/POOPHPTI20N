<?php
    namespace PHP\Modelo; //Definir o Local do Projeto

    require_once('Cliente.php'); //Requisitando uma Classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use PHP\Modelo\Cliente; //Definir a Classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    /*
    $endCliente = new Endereco("Rua","291","Nogueira","Diadema","São Paulo","Brasil","09950-000");
    $cliente = new Cliente("12345","Pedro","11970707070",$endCliente,560.60); //Criar um Objeto
    $clienteDois = new Cliente("12","João","13",$endCliente,1020.25);
    $funcionario = new Funcionario("123","Fabio","2020","Operador",2150.35,$endCliente);

    echo $cliente -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $clienteDois -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $funcionario -> imprimir();
    echo $endCliente -> imprimir();
    */

    $conn = new Conexao();
    $conn -> conectar(); //Acessar o Banco de Dados

    //$inserir = new Inserir(); //Criando Acesso a Classe Inserir
    //echo $inserir -> cadastrarPessoa($conn,"3","Fabio","Rua","11");

    $consultar = new Consultar();
    echo $consultar -> consultarIndividual($conn,'1');
    echo $consultar -> consultarIndividual($conn,'2');
    echo $consultar -> consultarIndividual($conn,'3');

    $atualizar = new Atualizar();
    echo $atualizar -> atualizarPessoa($conn, "nome", "Allan",1);

    $excluir = new Excluir();
    echo $excluir -> excluirPessoa($conn,1);
?>