<?php
    namespace PHP\Modelo\DAO;

    use Exception;

    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'libraria');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Não entrei :(";
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do conectar
    }//fim da classe
?>