<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirPessoa(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao -> conectar();
                $sql = "Delete from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluido com sucesso!";
                }else{
                    echo "<br><br>Não foi possível excluir!";
                }
            }catch(Exception $erro){

            }//Fim do Catch
        }//Fim do Método
    }//Fim do Excluir

?>