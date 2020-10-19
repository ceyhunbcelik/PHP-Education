SELECT * FROM users
/* fetching all data of columns in table called users */

SELECT username, user_pass FROM users
/* fetching username columns in table called users */

SELECT username, user_pass as 'Password' FROM users
/* giving name 'Password' to column called user_pass */

SELECT id , username FROM users WHERE id = 2
/* fetch a data and data id should equal 2 */
