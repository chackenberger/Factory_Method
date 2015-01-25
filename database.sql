CREATE DATABASE factory;

USE factory;

CREATE TABLE factory (
  id INT(10) PRIMARY KEY,
  type VARCHAR(50),
  val VARCHAR(255)
);

INSERT INTO factory VALUES(1,'adapter','mysql'),(2,'dsn','mysql:host=localhost;dbname=my_db_name'),
(3,'user','username'),(4,'password','password');