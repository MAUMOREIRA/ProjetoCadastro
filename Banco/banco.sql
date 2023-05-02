DROP DATABASE IF EXISTS projeto1;

CREATE DATABASE projeto1;
USE projeto1; 

CREATE TABLE usuario
(
id_usuario int(4) PRIMARY KEY auto_increment,
nome_usuario varchar(100) NOT NULL,
email_usuario varchar(50) NOT NULL,
fone_usuario varchar(30) null,
senha        varchar(50) NOT NULL

); 
