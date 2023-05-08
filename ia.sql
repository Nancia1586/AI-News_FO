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
    ('Actualites et evenements'),
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

