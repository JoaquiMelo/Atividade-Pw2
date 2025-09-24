create database bd_estoque;
use bd_estoque;
create table tb_user(
id_user int auto_increment primary key,
name_user varchar(45),
data_nasc date,
login varchar (45),
password text,
setor varchar (45)
);

ALTER TABLE tb_user
RENAME COLUMN setor TO setor_user;