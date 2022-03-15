create database crud;
use crud;

create table solucoes (
id INT NOT NULL primary key AUTO_INCREMENT,
descricao varchar(255) NOT NULL,
solucao varchar(255),
image varchar(255),
data_lancamento TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
);