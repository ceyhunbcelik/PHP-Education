CREATE TABLE users(
	name varchar(255),
    surname varchar(255)
);
/* Creating table */

ALTER TABLE users ADD PRIMARY KEY (name);
/* make "name" column to primary key in table called users */

CREATE TABLE users(
	id int AUTO_INCREMENT, /* making aut increase to every insert */
  PRIMARY KEY (id), /* this is making non repeat column value */
  name varchar(255),
  surname varchar(255)
)
