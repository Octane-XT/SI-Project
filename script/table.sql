-- CREATE DATABASE regime;

-- USE regime;

CREATE TABLE IF NOT EXISTS utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(60),
    prenom VARCHAR(60),
    date_naissance DATE,
    email VARCHAR(40),
    adresse VARCHAR(40),
    password VARCHAR(30),
    genre INT,
    vola DOUBLE DEFAULT 0,
    poids DOUBLE DEFAULT 0,
    taille DOUBLE DEFAULT 0,
    isadmin INT DEFAULT 0,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS sport (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS type_aliment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS aliment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    id_type_aliment INT NOT NULL,
    FOREIGN KEY (id_type_aliment) REFERENCES type_aliment(id)
);

CREATE TABLE IF NOT EXISTS code (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    argent DOUBLE NOT NULL,
    estutilise INT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS regime (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    objectif INT
);

CREATE TABLE IF NOT EXISTS aliment_objectif (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_aliment INT NOT NULL,
    id_regime INT NOT NULL,
    quantite DOUBLE,
    poids DOUBLE,
    prix DOUBLE,
    FOREIGN KEY (id_aliment) REFERENCES aliment(id),
    FOREIGN KEY (id_regime) REFERENCES regime(id)
);
insert into aliment_objectif(id_aliment,id_regime,quantite,poids,prix) values(6,1,100,1,100);

CREATE TABLE IF NOT EXISTS sport_objectif (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_sport INT NOT NULL,
    id_regime INT NOT NULL,
    frequence DOUBLE,
    poids DOUBLE,
    prix DOUBLE DEFAULT 3000,
    FOREIGN KEY (id_sport) REFERENCES sport(id),
    FOREIGN KEY (id_regime) REFERENCES regime(id)
);

CREATE TABLE IF NOT EXISTS abonnement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT NOT NULL,
    id_regime INT NOT NULL,
    poids_objectif DOUBLE,
    datedebut DATETIME DEFAULT CURRENT_TIMESTAMP,
    datefin DOUBLE PRESISION,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_regime) REFERENCES regime(id)
);

CREATE TABLE IF NOT EXISTS motif (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS transaction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT NOT NULL,
    vola DOUBLE NOT NULL,
    type INT,
    id_motif INT NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_motif) REFERENCES motif(id)
);

CREATE TABLE IF NOT EXISTS livraison (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_abonnement INT NOT NULL,
    id_aliment_objectif INT NOT NULL,
    jour INT NOT NULL,
    FOREIGN KEY (id_abonnement) REFERENCES abonnement(id),
    FOREIGN KEY (id_aliment_objectif) REFERENCES aliment_objectif(id)
);

CREATE TABLE IF NOT EXISTS utilisateur_code (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT NOT NULL,
    id_code INT NOT NULL,
    date_utilisation DATETIME DEFAULT NULL
);