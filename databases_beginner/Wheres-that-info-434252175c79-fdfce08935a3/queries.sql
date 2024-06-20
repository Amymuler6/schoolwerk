-- heeft een award gewonnen
SELECT title, has_won_awards
FROM series
WHERE has_won_awards > 0;

-- boven 2.5
SELECT title, rating
FROM series
WHERE rating > 2.5;

-- voor Nl country en language.
SELECT title, country, language
FROM series
WHERE country = 'NL' AND language = 'NL';

-- seasons minder dan 5
SELECT title, seasons
FROM series
WHERE seasons < 5;

-- hoogste rated
SELECT title, MAX(rating)
FROM series;

-- minder dan 3 of hoger dan 20
SELECT title, seasons
FROM series
WHERE seasons > 3 OR seasons < 20;

-- combinatie TH
SELECT title
FROM series
WHERE title LIKE ('TH%');

-- heeft niet 3 seasons
SELECT title, seasons
FROM series
WHERE seasons != 3;