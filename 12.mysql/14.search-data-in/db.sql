SELECT * FROM calisanlar
WHERE id = 5 || id = 6 || id = 7
/* I know it weird :/ */

SELECT * FROM calisanlar
WHERE id IN(5, 6, 7)
/* This is better :) */

/* ---------------------------------- */

SELECT * FROM calisanlar
WHERE id != 5 && id != 6 && id != 7

SELECT * FROM calisanlar
WHERE id NOT IN(5, 6, 7)

SELECT meslek FROM calisanlar
WHERE meslek IN(
	SELECT meslek FROM meslekler
)
/* fetch "meslek" column in calisanlar table and "meslek" values should equal value of "meslek" column in meslekler table  */
