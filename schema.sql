
CREATE TABLE comments (
    id int NOT NULL AUTO_INCREMENT,
    comment varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    password varchar(255),
    role varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE hello_flags (
    id int NOT NULL AUTO_INCREMENT,
    flag varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO users (username, password, role) VALUES ("admin", "FLAG{SQL1nJ3Ct10Ni5E4SY}", "admin");
INSERT INTO users (username, password, role) VALUES ("guest", "guest", "guest");

INSERT INTO comments (comment) VALUES ("I like the style, I can even <b>include tags!</b>...");

INSERT INTO hello_flags (flag) VALUES ("FLAG{EnUm3raTI0NI4impORT4nt}");
