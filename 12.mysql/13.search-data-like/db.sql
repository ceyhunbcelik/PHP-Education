SELECT * FROM calisanlar
WHERE ad LIKE '%n'
/* filter by "ad" and "ad" should finish with "n" character */

SELECT * FROM calisanlar
WHERE ad LIKE 't%'
/* filter by "ad" and "ad" should start with "t" character */

SELECT * FROM calisanlar
WHERE ad LIKE 't%n'
/* filter by "ad" and "ad" should start with "t" character and finish with "n" character */

SELECT * FROM calisanlar
WHERE ad LIKE '%n%'
/* filter by "ad" and "ad" should have "n" character */

SELECT * FROM calisanlar
WHERE ad LIKE '_a%'
/* filter by "ad" and "ad" can start any character but second shoul start with "a" character */
