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

