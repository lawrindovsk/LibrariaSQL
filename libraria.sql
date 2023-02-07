create database libraria;
use libraria;

create table cliente(
cod  int not null primary key auto_increment,
nome varchar(150) not null,
endereco varchar(250) not null,
telefone int(20) not null,
dataNascimento date not null,
login varchar(25) not null,
senha varchar(25) not null
)Engine = InnoDB;

create table livro(
cod int not null primary key auto_increment,
nomeLivro varchar(150) not null,
autor varchar(150) not null,
editora varchar(150) not null,
estoque int(150) not null,
valor float not null
)Engine = InnoDB;

drop table cliente;
drop table livro;
drop table endereco;

select * from livro;
select * from cliente;
show full tables