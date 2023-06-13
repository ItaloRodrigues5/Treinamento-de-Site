CREATE DATABASE xuxalogin;
USE xuxalogin;

CREATE TABLE usuario(
    nome varchar(20) PRIMARY KEY,
    senha varchar(20) NOT NULL
);

SELECT * from usuario;