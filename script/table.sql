-- create database regime;

create table if not exists utilisateur (
    id int primary key auto_increment,
    nom varchar(60),
    prenom varchar(60),
    date_naissance date,
    email varchar(40),
    adresse varchar(40),
    password varchar(30),
    genre int,
    vola double precision default 0,
    poids double precision default 0,
    taille double precision default 0,
    isadmin int default 0,
    date date default now()
);

create table if not exists sport (
    id int primary key auto_increment,
    nom varchar(40)
);

create table if not exists type_aliment (
    id int primary key auto_increment,
    nom varchar(40)
);

create table if not exists aliment (
    id int primary key auto_increment,
    nom varchar(40),
    id_type_aliment int not null,
    foreign key(id_type_aliment) references type_aliment(id)
);

CREATE TABLE IF NOT EXISTS code (
    id int primary key auto_increment,
    nom varchar(30),
    argent double precision not null,
    estutilise int default 0                                    ------------ 0 CREE ---- 1 NISY NAKA FA MBOLA TSY VALIDE ---- 11 VALIDEE NY ADMIN -----------
);

CREATE TABLE IF NOT EXISTS regime (
    id int primary key auto_increment,
    nom varchar(30),
    objectif int
);

create table if not exists aliment_objectif (
    id int primary key auto_increment,
    id_aliment int not null,
    id_regime int not null,
    quantite double precision,
    poids double precision,
    prix double precision,
    foreign key(id_aliment) references aliment(id),
    foreign key(id_regime) references regime(id)
);

create table if not exists sport_objectif (
    id int primary key auto_increment,
    id_sport int not null,
    id_regime int not null,
    frequence double precision,
    poids double precision,
    prix double precision default 3000,
    foreign key(id_sport) references sport(id),
    foreign key(id_regime) references regime(id)
);

create table if not exists abonnement (
    id int primary key auto_increment,
    id_utilisateur int not null,
    id_regime int not null,
    poids_objectif double precision,
    datedebut date,
    datefin date,
    foreign key(id_utilisateur) references utilisateur(id),
    foreign key(id_regime) references regime(id)
);

create table if not exists motif (
    id int primary key auto_increment,
    nom varchar(30)
);

create table if not exists transaction (
    id int primary key auto_increment,
    id_utilisateur int not null,
    vola double precision not null,
    type int,
    id_motif int not null,
    foreign key(id_utilisateur) references utilisateur(id)
    foreign key(id_motif) references motif(id)
);

create table if not exists livraison (
    id int primary key auto_increment,
    id_abonnement int not null,
    id_aliment_objectif int not null,
    jour int not null,
    foreign key(id_abonnement) references abonnement(id)
    foreign key(id_aliment_objectif) references aliment_objectif(id)
);