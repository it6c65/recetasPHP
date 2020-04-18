CREATE DATABASE recadmin;
use recadmin;

CREATE TABLE users (
    id INT(3) AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    password CHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE ingredients(
    id TINYINT AUTO_INCREMENT,
    quantity INT NOT NULL,
    times INT(2) NOT NULL,
    available BOOL NOT NULL,
    description VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE recipes(
    id INT AUTO_INCREMENT NOT NULL,
    users_id INT NOT NULL,
    ingredients_id TINYINT NOT NULL,
    nameof VARCHAR(40) NOT NULL,
    estimated TIME,
    preparation TEXT NOT NULL,
    creation DATE NOT NULL,
    img TEXT,
    PRIMARY KEY(id),
    FOREIGN KEY (users_id) REFERENCES users(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (ingredients_id) REFERENCES ingredients(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    UNIQUE(nameof)
);

CREATE TABLE tips(
    id tinyint AUTO_INCREMENT NOT NULL,
    recipes_id INT NOT NULL,
    tmp_name VARCHAR(40),
    extras TEXT NOT NULL,
    FOREIGN KEY (recipes_id) REFERENCES recipes(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    PRIMARY KEY(id)
);
