SELECT * FROM bolumler ORDER BY bolum_sezon
/* sorted data from 0 to 10 in column called bolum_sezon in database called bolumler */

SELECT * FROM bolumler
ORDER BY bolum_no, bolum_sezon
/* sorted first bolum_no after than bolum_sezon */

SELECT * FROM bolumler
ORDER BY bolum_sezon, bolum_no DESC
/* bolum_no is reverse sorting */
