<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Atualizar</title>

    </head>
    <body>
        <form method="POST">
        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"><br><br>

        <label>Campo: </label>
        <select name="atualizacao">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereço</option>
        </select><br><br>

        <label>Novo Dado: </label><br>
        <input type="text" name="novoDado" id="novoDado"><br><br>

        <button type="submit">
            Atualizar
        <?php
            //Conexão com o banco
            $conexao = new Conexao();

            //Coletar o código
            $codigo =   $_POST['codigo'];
            $campo =    $_POST['atualizacao'];
            $novoDado = $_POST['novoDado'];

            //Chamar o atualizar
            $atualizar = new Atualizar();
        ?>
        </button>
        <?php
            echo $atualizar -> atualizarPessoa($conexao, $campo, $novoDado, $codigo);
        ?>
        </form><!-- Fim do Formulário -->
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>