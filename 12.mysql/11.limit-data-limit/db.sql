SELECT * FROM users LIMIT 2
/* fetch first 2 data */

SELECT * FROM bolumler
ORDER BY id DESC
LIMIT 2

/* first, reverse sorting then fetch first 2 data */

SELECT * FROM bolumler
LIMIT 2, 2
/* skip first 2 data then fetch first 2 data */
