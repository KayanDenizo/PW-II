CREATE DATABASE etimpwiialuno;
USE etimpwiialuno;
CREATE TABLE contato(
    id int primary key auto_increment,
    rm varchar(150),
    nome varchar(100),
    email varchar(150),
    senha varchar(32)
);

INSERT INTO contato SET nome = "Admin", email = "admin@gmail.com", senha = "123"