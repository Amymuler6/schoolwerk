ALTER TABLE planeten
MODIFY naam int NOT NULL;

ALTER TABLE planeten
MODIFY diameter int NOT NULL;

ALTER TABLE planeten
MODIFY afstand int NOT NULL;

ALTER TABLE planeten
MODIFY massa int NOT NULL;



UPDATE planeten
SET Datum = '20 juli 1969'
WHERE Naam = 'Maan';