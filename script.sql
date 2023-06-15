create database CRUD;
use CRUD;


create table pessoa (
	id int primary key auto_increment not null,
    nome varchar(50),
    idade int not null,
    profissao varchar(50) not null
)

