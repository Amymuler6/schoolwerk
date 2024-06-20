-- 1
SELECT title, rating
FROM series
WHERE rating > 2.5
ORDER BY rating DESC;
-- 2
SELECT title, seasons
FROM series
WHERE seasons < 5
ORDER BY seasons ASC;

-- 3
SELECT title, seasons, country
FROM series
WHERE seasons < 3 or seasons > 20
ORDER BY seasons DESC , country DESC;