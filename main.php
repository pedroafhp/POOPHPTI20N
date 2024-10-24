<?php
    namespace PHP\Modelo; //Definir o Local do Projeto
    require_once('Cliente.php'); //Requisitando uma Classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente; //Definir a Classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;

    $cliente = new Cliente("12345","Pedro","11970707070","Rua",560.60); //Criar um Objeto
    $clienteDois = new Cliente("12","João","13","Rua",1020.25);
    $funcionario = new Funcionario("123","Fabio","2020","Avenida","Operador",2150.35);

    echo $cliente -> imprimir()."<br>";
    echo $clienteDois -> imprimir()."<br>";
    echo $funcionario -> imprimir();



?>