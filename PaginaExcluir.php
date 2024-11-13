<?php 
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Excluir</title>

    </head>
    <body>
        <form method="POST">
        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"/><br><br>

        <button type="submit">
            Excluir
        <?php
            //Conexão com o banco
            $conexao = new Conexao();

            //Coletar o código
            $codigo = $_POST['codigo'];

            //Chamar o excluir
            $excluir = new Excluir();
        ?>
        </button>
        <?php
            echo $excluir -> excluirPessoa($conexao, $codigo);
        ?>
        </form><!-- Fim do Formulário -->
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>