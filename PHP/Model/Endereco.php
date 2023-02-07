<?php
    namespace PHP\Modelo;

    class Endereco{

        public string $rua;
        public string $numero;
        public string $CEP;
        
        //Método construtor
        public function __construct(
            string $rua, 
            string $numero,
            string $CEP)
        {
            $this->rua  = $rua; 
            $this->numero      = $numero;
            $this->CEP         = $CEP;
        }//fim do construtor

        //Métodos gets e sets
        public function getRua() : string
        {
            return $this->rua;
        }//fim do método

        public function setRua(string $rua) : void
        {
            $this->rua = $rua;
        }//fim do método

        public function getNumero() : string
        {
            return $this->numero;
        }//fim do método

        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }//fim do método
        
        public function getCEP() : string
        {
            return $this->CEP;
        }//fim do método

        public function setCEP(string $CEP) : void
        {
            $this->CEP = $CEP;
        }//fim do método
    }//fim da classe endereço
?>