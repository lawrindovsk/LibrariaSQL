<?php

    /*namespace PHP\Modelo\DAO;

    use PHP\Model\livro;
    use PHP\Model\Cliente\cliente;


    class Pedido{
    
    public Livro $livro;
    public Cliente $cliente;

    public function __construct(Cliente $clienteParam, Livro $livroParam){
        $this->cliente = $clienteParam;
        $this->livro   = $livroParam;
    }

    public function realizarPedido(float $pedido){
        if($pedido > $this->$livro->estoque){
            echo"Não há a quantidade informada. Faça uma reserva!<br>";
        }
        else{
            echo "Compra efetuada com sucesso!";
        }
    }
}
?>