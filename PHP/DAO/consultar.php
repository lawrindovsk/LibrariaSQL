<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Exception;
    use PHP\Modelo\DAO\Conexao;
    
    class Consultar{
        public function consultarIndividualCliente(
            Conexao $conexao,
            string $nomeDaTabela,
            int $codigo)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "select * from $nomeDaTabela where cod = '$codigo'";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cod"] == $codigo){
                        echo "<br>Codigo: ".$dados["cod"]."<br>Nome: ".$dados["nome"]."<br>Endereco: ".$dados["endereco"]."<br>Telefone: ".$dados["telefone"]."<br>Data de nascimento: ".$dados["dataNascimento"]."<br>Usuario: ".$dados["login"]."<br>Senha: ".$dados["senha"];
                        return;//encerra a operacao
                    }
                }
                echo "codigo digitado nao foi encontrado";
            
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim consultar individual

        public function consultarIndividualLivro(
            Conexao $conexao,
            string $nomeDaTabela,
            int $codigo)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "select * from $nomeDaTabela where cod = '$codigo'";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cod"] == $codigo){
                        echo "<br>Codigo: ".$dados["cod"]."<br>Nome do livro: ".$dados["nomeLivro"]."<br>Autor: ".$dados["autor"]."<br>Quantidade em estoque: ".$dados["estoque"]."<br>Preço: ".$dados["valor"];
                        return;//encerra a operacao
                    }
                }
                echo "codigo digitado nao foi encontrado";
            
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim consultar individual

        public function consultarTudoCliente(
            Conexao $conexao,
            string $nomeDaTabela)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Codigo: ".$dados["cod"]."<br>Nome: ".$dados["nome"]."<br>Endereco: ".$dados["endereco"]."<br>Telefone: ".$dados["telefone"]."<br>Data de nascimento: ".$dados["dataNascimento"]."<br>Usuario: ".$dados["login"]."<br>Senha: ".$dados["senha"];
                }           
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim cadastrar

        public function consultarTudoLivro(
            Conexao $conexao,
            string $nomeDaTabela)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn,$sql);//execurta acao do script no db
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Nome do livro: ".$dados["nomeLivro"]."<br>Autor: ".$dados["autor"]."<br>Quantidade em estoque: ".$dados["estoque"]."<br>Preço: ".$dados["valor"];
                }           
            
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim cadastrar
    }//fim classe
?>