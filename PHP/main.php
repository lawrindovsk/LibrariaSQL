<?php
    namespace PHP\Modelo;

    require_once("DAO/Conexao.php");
    require_once("DAO/inserir.php");
    require_once("DAO/consultar.php");
    require_once("DAO/atualizar.php");
    require_once("DAO/deletar.php");

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\DAO\Atualizar;
    use PHP\DAO\Deletar;

    echo "===== Conectando no Banco de Dados ===== <br><br>";
    $conexao = new Conexao();
    $conexao->Conectar();//abrindo conexao com db

    //-----------------------------------------------------CADASTRO--------------------------------------------------------//    
    $insert = new Inserir();//permissao para acessar os metodos da classe inserir
    
    //---------------------------------------------CADASTRO DE CLIENTES-----------------------------------------------//    
    //$insert->cadastrarCliente($conexao, "cliente", "Gustavo Laurindo", "Rua da Independência, 481", "1199966669", "20050124","lawrindovsk", "24012005");
    //$insert->cadastrarCliente($conexao,"cliente", "gygy linda", "5555555555", "5555555555", "5555555555", "5555555555", "5555555555");
    //---------------------------------------------CADASTRO DE CLIENTES-----------------------------------------------//    
    
    //---------------------------------------------CADASTRO DE LIVROS-----------------------------------------------//    
    //$insert->cadastrarLivro($conexao, "livro", "O Gato Preto e outros contos", "Edgar Allan Poe", "LeBooks Editora", 97, 13.00);
    //$insert->cadastrarLivro($conexao, "livro", "E Não Sobrou Nenhum", "Agatha Cristie", "Globo Livros",  120, 30.00);
    //$insert->cadastrarLivro($conexao, "livro", "Capitães da Areia", "Jorge Amado", "José Olympio",  48, 32.00);
    //$insert->cadastrarLivro($conexao, "livro", "A Revolução dos Bichos", "George Orwell", "Companhia das Letras", 33, 15.00);
    //$insert->cadastrarLivro($conexao, "livro", "A Sutil Arte de Ligar o F*da-se", "Mark Manson", "Editora Intrinseca",  68, 36.00);
    //$insert->cadastrarLivro($conexao, "livro", "A Política - Aristóteles","Aristóteles", "LaFonte", 13, 15,00);
    //---------------------------------------------CADASTRO DE LIVROS-----------------------------------------------//

    //------------------------------------------------------CADASTRO--------------------------------------------------------//    

    //------------------------------------------------------CONSULTA--------------------------------------------------------// 
    $select = new Consultar();//permissao para acessar os metodos da classe consultar
    
    echo $select->consultarIndividualCliente($conexao,"cliente", 1);
    //echo $select->consultarIndividualLivro($conexao,"livro", 1);
    //echo $select->consultarTudoCliente($conexao,"cliente");
    //echo $select->consultarTudoLivro($conexao,"livro");
    //------------------------------------------------------CONSULTA--------------------------------------------------------// 

    echo "<br><br>===== ♥ Usuário cadastrado com sucesso! ♥ =====";
    echo "<br><br>===== Bem-Vindo a Livraria Lalau! =====";
    
    echo "<br><br>===== LIVROS =====<br>";
    echo $select->consultarTudoLivro($conexao, "livro");


    echo "<br><br> ==== Compra Efetuada ====";
    echo "<br> Livro                   : Aristotéles - A Política
               Cliente                 : Gustavo Laurindo Dos Santos
               Valor                   : R$15,00
               Remetente               : Livraria do LauLau
               Endereço a ser entregue : Rua da independência, 481";


    //$atu = new Atualizar();//permissao para acessar os metodos da classe consultar.
    //echo $atu->atualizar($conexao, "nome", "maria", 3, "cliente");
    //$del = new Deletar();//permissao para acessar os metodos da classe deletar
    //echo $del->deletarIndividual($conexao,"cliente", 35);

    





    



?>