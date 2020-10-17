EXPLAIN users
/* listing columns type of table called users */

DESCRIBE users
/* same of EXPLAIN command */

SHOW FIELDS FROM users
/* same of EXPLAIN command */

SHOW COLUMNS FROM users
/* same of EXPLAIN command */

SHOW TABLES
/* listing tables in database */

SHOW TABLES IN database_test
/* listing tables in database called database_test */

SELECT * FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'database_test'
/* listing columns details of table in database called database_test */
