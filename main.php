<?php
    namespace PHP\Modelo; //Definir o Local do Projeto

    require_once('Cliente.php'); //Requisitando uma Classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');

    use PHP\Modelo\Cliente; //Definir a Classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;

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



?>