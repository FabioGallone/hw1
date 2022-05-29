
create database hw1gallone;
use hw1gallone

create table utenti(
    id integer not null primary key auto_increment,
    nome varchar(50) not null,
    cognome varchar(50) not null,
    email varchar(60) not null,
    username varchar(50) not null,
    password varchar(255) not null)
    engine="innoDB";


create table prodotti(
    id_prodotto integer not null primary key auto_increment,
    nome varchar(100) not null,
    immagine varchar(100),
    descrizione varchar(250) not null,
    prezzo decimal(4, 2) not null

) engine="innoDB";


insert into prodotti (nome, immagine, descrizione, prezzo) values
('MAGLIETTA NERA', "image/maglia_nera.jpg", "Una bellissima maglia nera realizzata in cotone", "10"),
('MAGLIETTA BIANCA', "image/maglia_bianca.jpg", "Una bellissima maglia bianca realizzata in cotone", "10"),
('MAGLIETTA VERDE', "image/maglia_verde.jpg", "Una bellissima maglia verde realizzata in cotone", "10");


create table ordine(
    id integer not null primary key auto_increment,
    nome varchar(50) not null,
    cognome varchar(50) not null,
    nome_maglia varchar(100) not null,
    prezzo varchar(100) not null,
    data_ordine date

) engine="innoDB";


/*insert into prodotti (nome, immagine, descrizione, prezzo) values
('MAGLIETTA BLU', "image/maglia_blu.jpg", "Una bellissima maglia verde realizzata in cotone", "10");*/