ALTER TABLE users ADD COLUMN (
	user_name varchar(255),
  user_mail varchar(255)
)
/* add column in table called "users" */

ALTER TABLE users ADD user_pass varchar(255) AFTER user_name
/* add "user_pass" column after "user_name" column in table called "users" */

ALTER TABLE users ADD test2 varchar(255) FIRST
/* add "test2" column in first line of table called "users" */

ALTER TABLE users DROP COLUMN test
/* delete "test" column in table called "users" */

ALTER TABLE users CHANGE user_name user_name_surname varchar(255)
/* change "user_name" column to "user_name_surname" in table called "users" */
