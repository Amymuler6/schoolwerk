TRUNCATE TABLE planeten

INSERT INTO planeten (naam, diameter, afstand, massa) 
VALUES ('Zon', 139200, 0, 332946),
       ('Mercurius', 4880, 57910000, 0),
       ('Venus', 12104, 108208930, 1),
       ('Aarde', 12756, 149597870, 1),
       ('Mars', 6794, 227936640, 0);

ALTER TABLE planeten RENAME planeten;