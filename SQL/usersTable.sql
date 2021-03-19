CREATE TABLE users (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username TEXT(25) NOT NULL,
    passwordHash BINARY(64) NOT NULL,
    firstName TEXT(25) NOT NULL,
    surname TEXT(25) NOT NULL
);