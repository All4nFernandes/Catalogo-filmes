create database filmesdb;

create table filme (
    id int primary key auto_increment,
    nome varchar(255) not null,
    ano int,
    descricao text,
    url_imagem longtext,
    url_trailer longtext
);