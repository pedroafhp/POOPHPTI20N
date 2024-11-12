<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Atualizar
    {
        function atualizarPessoa(Conexao $conexao, string $campo, string $novoDado, int $codigo){
            try{
                $conn = $conexao -> conectar();
                $sql = "Update pessoa set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br>Não foi possível atualizar!";
                }
            }catch(Exception $erro)
            {
                echo $erro;
            }//Fim do Catch
        }//Fim do Método
    }//Fim do Atualizar

?>