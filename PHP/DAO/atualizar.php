<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Exception;
    use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        public function atualizar(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            string $codigo,
            string $nomeDaTabela)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db
                
                mysqli_close($conn);
                
                if($result){
                    echo "<br><br>Atualizado com sucesso";
                    return;
                }
                echo "<br><br>Não foi atualizado :(";
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim atualizar
    }//fim classe
?>