DROP DATABASE IF EXISTS bob_vance;
CREATE DATABASE bob_vance;
USE bob_vance;
	CREATE TABLE koelkast (
        Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Naam varchar(255) NOT NULL,
        Prijs varchar(255) NOT NULL,
        Kleur varchar(255) NOT NULL,
        Hoogte varchar(255) NOT NULL,
        Breedte varchar(255) NOT NULL,
        Energieklasse varchar(255) NOT NULL);

