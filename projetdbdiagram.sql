CREATE TABLE Personne (id int(10) NOT NULL AUTO_INCREMENT, nom varchar(255) NOT NULL, prenom varchar(255) NOT NULL, login varchar(255) NOT NULL UNIQUE, mot_de_passe varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Post (id int(10) NOT NULL AUTO_INCREMENT, id_personne int(10) NOT NULL, titre varchar(255) NOT NULL, contenu varchar(255) NOT NULL, `date` date NOT NULL, PRIMARY KEY (id));
ALTER TABLE Post ADD CONSTRAINT FKPost825905 FOREIGN KEY (id_personne) REFERENCES Personne (id);
