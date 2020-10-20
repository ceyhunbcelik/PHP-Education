SELECT sehir,
	     MIN(maas) as 'Minimum',
       MAX(maas) as 'Maximum',
       COUNT(id) as 'Population'
       FROM calisanlar
	     GROUP BY sehir
       HAVING Minimum > 2000

/* making group sehir and fetch MIN and MAX maas and population in sehirs */
/* we can use new name('Minimum', 'Maximum') of column rather than original name by HAVING parameter */

SELECT sehir    as 'City',
       meslek   as 'Job',
	     MIN(maas) as 'Minimum',
       MAX(maas) as 'Maximum',
       COUNT(id) as 'Population'
       FROM calisanlar
	     GROUP BY sehir, meslek
