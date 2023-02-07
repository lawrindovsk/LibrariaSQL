<?php
    namespace PHP\Modelo;

    class Cliente{
        private string $nome;               
        private string $telefone;           
        private string $endereco;           
        private string $dataNascimento;
        private string $login;          
        private string $senha;          

        //Método construtor
        public function __construct(
            string $nome,            
            string $telefone,        
            string $endereco,            
            string $dataNascimento,  
            string $login,         
            string $senha)               
        {
            $this->nome           = $nome;
            $this->telefone       = $telefone;
            $this->endereco       = $endereco;
            $this->dataNascimento = $dataNascimento;
            $this->login          = $login;
            $this->senha          = $senha;
        }//fim do construtor

        //Métodos gets e sets
        public function getNome() : string
        {
            return $this->nome;
        }//fim do método

        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }//fim do método

        public function getTelefone() : string
        {
            return $this->telefone;
        }//fim do método

        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $telefone;
        }//fim do método
        
        public function getEndereco() : string
        {
            return $this->endereco;
        }//fim do método

        public function setEndereco(string $endereco) : void
        {
            $this->endereco = $endereco;
        }//fim do método
        
        public function getDataNascimento() : string
        {
            return $this->dataNascimento;
        }//fim do método

        public function setDataNascimento(string $dataNascimento) : void
        {
            $this->dataNascimento = $dataNascimento;
        }//fim do método
        
        public function getLogin() : string
        {
            return $this->login;
        }//fim do método

        public function setLogin(string $login) : void
        {
            $this->login = $login;
        }//fim do método
        
        public function getSenha() : string
        {
            return $this->senha;
        }//fim do método

        public function setSenha(string $senha) : void
        {
            $this->senha = $senha;
        }//fim do método
    }//fim da classe endereço
?>