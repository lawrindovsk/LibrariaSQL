<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Exception;
    use PHP\Modelo\DAO\Conexao;

    class Deletar{
        public function deletarIndividual(
            Conexao $conexao,
            string $nomeDaTabela,
            int $codigo)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "delete from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db
            
            if($result){
                return "<br><br>deletado com sucesso!!";
            }
            return "<br><br>deu errado :(";
            
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim cadastrar
    }//fim classe
?>