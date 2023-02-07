<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Exception;
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function cadastrarCliente(
            Conexao $conexao,
            string $nomeDaTabela,
            string $nome,
            string $endereco,
            string $telefone,
            string $dataNascimento,
            string $login,
            string $senha)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "insert into $nomeDaTabela (cod, nome, endereco, telefone, dataNascimento, login, senha)
                values ('', '$nome', '$endereco', '$telefone',$dataNascimento, '$login', '$senha')";//script do db
                $result = mysqli_query($conn,$sql);//execurta acao do script no db
            
            if($result){
                return "<br><br>Inserido com sucesso!!";
            }
            return "<br><br>não inserido :(";
            
            
            }catch(Exception $erro){
                echo $erro;
            }

            
        }//fim cadastrar cliente

        
        public function cadastrarLivro(
            Conexao $conexao,
            string $nomeDaTabela,
            string $nomeLivro,
            string $autor,
            string $editora,
            int $estoque,
            float $valor)
        {
            try{
                $conn = $conexao->conectar();//abrindo conexao com o banco
                $sql = "insert into $nomeDaTabela (cod, nomeLivro, autor, editora, estoque, valor)
                values ('', '$nomeLivro', '$autor', '$editora', '$estoque', '$valor')";//script do db
                $result = mysqli_query($conn,$sql); //execurta acao do script no db
            
            if($result){
                return "<br><br>Inserido com sucesso!!";
            }
            return "<br><br>não inserido :(";
            
            
            }catch(Exception $erro){
                echo $erro;
            }            
        }//fim cadastrar livro
    }//fim classe
?>