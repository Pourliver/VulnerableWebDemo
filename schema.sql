CREATE TABLE users {
    id int,
    username varchar(255),
    password varchar(255),
    role varchar(255)
};

CREATE TABLE hello_flags {
    id int,
    flag varchar(255),
};

INSERT INTO users VALUES (1, "admin" "FLAG{SQL1nJ3Ct10Ni5E4SY}", "admin");
INSERT INTO users VALUES (2, "guest" "guest", "guest");
INSERT INTO hello_flags VALUES (1,"FLAG{EnUm3raTI0NI4impORT4nt}");
