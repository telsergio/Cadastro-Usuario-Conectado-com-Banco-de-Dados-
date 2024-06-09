drop database if exists Pessoas;
create database Pessoas;
use Pessoas;


create table Pessoas (
	id 				integer primary key auto_increment,
    nome 			varchar(60),
    CPF 			varchar(60),
    RG	 			varchar(60),
    cel				varchar(60),
    email			varchar(30),
    data_nasc 		date,
    estado  		varchar(20),
    cidade  		varchar(120),
    login 			varchar(20),
    senha			varchar(20),
    confirmar_senha	varchar(20)
);




select * from Pessoas;	
-- select * from cidades where estado = 'selecionado na combobox'




