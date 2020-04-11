CREATE TABLE users (
    userID int,
    password VARCHAR(30),
    PRIMARY KEY(userID)
);
CREATE TABLE groceries (
    groceryID int,
    available int,
    estimated int,
    PRIMARY KEY(groceryID)
);
CREATE TABLE ingredients(
    id int,
    quantity int,
    times int,
    description varchar(100),
    PRIMARY KEY(id)
);
CREATE TABLE recipes(
    id int,
    nameof varchar(40),
    preparation text,
    creation date,
    img text,
    PRIMARY KEY(id)
);
CREATE TABLE tips(
    id int,
    recipes_id int,
    tmp_name varchar(40),
    extras text,
    PRIMARY KEY(id)
);
