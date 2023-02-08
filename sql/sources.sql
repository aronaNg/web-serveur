CREATE TABLE admin (
    username VARCHAR(128) PRIMARY KEY,
    password VARCHAR(128) NOT NULL
);

CREATE TABLE theme (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(45) NOT NULL
);

CREATE TABLE inscription (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(128) NOT NULL
);

CREATE TABLE theme_inscription (
    theme_id INT NOT NULL,
    inscription_id INT NOT NULL,
    PRIMARY KEY (theme_id, inscription_id),
    FOREIGN KEY (theme_id) REFERENCES theme(id),
    FOREIGN KEY (inscription_id) REFERENCES inscription(id)
);

--ALTER TABLE inscription ADD UNIQUE (email);

INSERT INTO admin VALUES("aronangom@gmail.com","aronangom");
-- votre coordonnées si vous testez INSERT INTO admin VALUES("","");

INSERT INTO inscription(email) VALUES("rone@gmail.com");
INSERT INTO inscription(email) VALUES("rone11@gmail.com");
INSERT INTO inscription(email) VALUES("rone12@gmail.com");


INSERT INTO theme(label) values("mon premier theme");