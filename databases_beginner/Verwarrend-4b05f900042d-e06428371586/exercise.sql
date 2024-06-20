INSERT INTO `planeten` (`Naam`, `Diameter`, `Afstand`, `Massa`, `bezoek_Datum`, `ID`) 
VALUES ('Mars', '6794', '227936640', '0.1', NULL, NULL);

UPDATE `planeten` 
SET `Naam` = 'Teenalp' 
WHERE `planeten`.`ID` = 7;