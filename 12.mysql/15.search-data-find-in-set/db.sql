SELECT FIND_IN_SET('d', 'a,b,c,d,e,f')
/* return 4 because string "d" in first parameter equal fourth in second string parameter */

SELECT * FROM diziler
WHERE FIND_IN_SET(2, turler)

SELECT * FROM diziler
WHERE FIND_IN_SET(1, turler) && FIND_IN_SET(5, turler)
