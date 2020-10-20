SELECT * FROM konular
INNER JOIN uyeler
ON konular.uye_id = uyeler.uye_id
/* merge tables but condition is "uye_id" should equal both of tables and it won't be fetch if equal is not  */

SELECT * FROM konular
LEFT JOIN uyeler
ON konular.uye_id = uyeler.uye_id
/* merge tables but condition "uye_id" no need to equal, fetch without "uyeler" table if not associated */

SELECT * FROM konular
RIGHT JOIN uyeler
ON konular.uye_id = uyeler.uye_id
/* merge tables but condition "uye_id" no need to equal, fetch without "konular" table if not associated */

SELECT konular.id, baslik, icerik, uye_kadi, ad as 'kategori_adi' FROM konular

INNER JOIN uyeler
ON konular.uye_id = uyeler.uye_id

INNER JOIN kategoriler
ON kategoriler.id = konular.kategori_id
