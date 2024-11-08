<?php
    namespace PHP\Modelo\DAO;
    
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarIndividual(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao -> conectar();
                $sql = "select * from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>Código: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'];
                        return; //Encerrar o Processo
                    }//Fim do If
                    echo "Código digitado não é validado!";
                }//Fim do While
            }catch(Exception $erro)
            {
                echo $erro;
            }//Fim do Catch
        }//Fim do Método
    }//Fim da Classe
?>