CREATE TABLE auteur(
    id SERIAL PRIMARY KEY,
    nom varchar(200),
    email varchar(200),
    mdp varchar(50)
);
INSERT INTO Auteur(nom,email,mdp)
VALUES
    ('Rakoto','rakoto@gmail.com',md5('rakoto'));

CREATE TABLE categorie(
    id SERIAL PRIMARY KEY,
    categorie varchar(100)
);
INSERT INTO Categorie(categorie)
VALUES
    ('Actualités et évènements'),
    ('Educations et formations'),
    ('Tendances et innovations'),
    ('Conseils pratiques');

CREATE TABLE info(
    id SERIAL PRIMARY KEY,
    date date,
    categorieid int,
    titre varchar(100),
    resume text,
    contenu text,
    image text,
    auteurid int,
    FOREIGN KEY (categorieid) REFERENCES categorie(id),
    FOREIGN KEY (auteurid) REFERENCES auteur(id)
);

create or replace view v_liste as
select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id;

create or replace view v_liste_actualite as
select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 1;

create or replace view v_liste_formation as
select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 2;

create or replace view v_liste_tendance as
select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 3;

create or replace view v_liste_conseil as
select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 4;
