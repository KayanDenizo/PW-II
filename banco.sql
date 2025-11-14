CREATE DATABASE caixaeletronico;
USE caixaeletronico;
CREATE TABLE contas (
    id int primary key auto_increment,
    titular varchar(100),
    agencia int,
    conta int,
    senha varchar(32),
    saldo float
);

CREATE TABLE historico (
    id int primary key auto_increment,
    id_conta int,
    tipo tinyint,
    valor float,
    data_operacao datetime
);

INSERT INTO contas SET titular = "Kayan Denizo", agencia = "123", conta = "321", senha = md5("123"), saldo = 1;
