ALTER TABLE `planeten` CHANGE `Massa` `Massa` FLOAT(11) NOT NULL;
ALTER TABLE `planeten` CHANGE `Datum` `bezoek_Datum` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

UPDATE planeten
SET 
    Massa = 0.1
WHERE
    Naam = 'Mercurius';


    UPDATE planeten
SET 
    Massa = 0.9
WHERE 
    Naam = 'Venus';


    UPDATE planeten
SET 
    Massa = 0.1
WHERE
    Naam = 'Mars';

    SET @counter = 0;
    UPDATE planeten SET ID = @counter := @counter + 1;

ALTER TABLE planeten
ADD COLUMN ID INT AUTO_INCREMENT PRIMARY KEY;