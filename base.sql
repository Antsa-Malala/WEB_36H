CREATE DATABASE takalo;
USE takalo;
create table utilisateur
(
    id              int auto_increment,
    nom_utilisateur varchar(50),
    mot_de_passe    varchar(50),
    estAdmin        int        ,
    nom             varchar(50),
    prenom          varchar(50),
    constraint utilisateur_pk
        primary key (id)
);
create table categorie
(
    id        int auto_increment,
    categorie varchar(30),
    constraint categorie_pk
        primary key (id)
);
create table objet
(
    id            int auto_increment,
    nom           varchar(50)   ,
    prix          decimal(10, 2),
    description   longtext      ,
    idUtilisateur int            not null,
    idCategorie   int            not null,
    constraint objet_pk
        primary key (id),
    constraint objet__idU_fk
        foreign key (idUtilisateur) references utilisateur(id),
    constraint objet__idC_fk
        foreign key (idCategorie) references categorie(id)
);
create table proposition(
    idProposition int not null auto_increment primary key,
    idUtilisateur1 int references utilisateur(id),
    idUtilisateur2 int references  utilisateur(id),
    idObjet1 int references objet(id),
    idObjet2 int references objet(id)
);
create table sary(
    idObjet int references objet(id),
    Anarana varchar(100)
);
create table mouvement(
    idProposition int references proposition(idProposition),
    etat int(10)
);
INSERT INTO utilisateur (nom_utilisateur, mot_de_passe, estAdmin, nom, prenom)
VALUES 
("user1", "password1", 1, "John", "Doe"), 
("user2", "password2", 0, "Jane", "Doe"), 
("user3", "password3", 1, "Tom", "Smith");
INSERT INTO categorie (categorie)
VALUES 
("Electronics"), 
("Clothing"), 
("Home Goods");
INSERT INTO objet (nom, prix, description, idUtilisateur, idCategorie)
VALUES 
("iPhone", 999.99, "Latest model of iPhone", 1, 1), 
("Jeans", 49.99, "Blue denim jeans", 2, 2), 
("Coffee Maker", 89.99, "10 cup coffee maker", 3, 3);
INSERT INTO proposition (idUtilisateur1, idUtilisateur2, idObjet1, idObjet2)
VALUES 
(1, 2, 1, 2), 
(2, 3, 2, 3), 
(3, 1, 3, 1);
INSERT INTO sary (idObjet, Anarana)
VALUES 
(1, "Apple iPhone"), 
(2, "Levi's Jeans"), 
(3, "Keurig Coffee Maker");
INSERT INTO mouvement (idProposition, etat)
VALUES 
(1, 0), 
(2, 1), 
(3, 2);

CREATE or replace VIEW objet_donnee AS select objet.id,objet.nom,objet.prix,objet.description,utilisateur.id as idUtilisateur,utilisateur.prenom,Categorie.categorie from objet join utilisateur on objet.idUtilisateur=utilisateur.id join categorie on categorie.id=objet.idCategorie;
CREATE VIEW mouvement_proposition AS select * from mouvement join proposition on mouvement.idProposition=proposition.id;


