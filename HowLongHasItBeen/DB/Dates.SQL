CREATE TABLE Dates (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(45) UNIQUE NOT NULL,
    username VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(45) NOT NULL,
    mode INT CHECK (mode >= 1 AND mode <= 3),
    date_1 DATE,
    date_2 DATE,
    date_3 DATE,
    date_4 DATE,
    date_5 DATE,
    date_6 DATE,
    date_7 DATE,
    date_8 DATE,
    date_9 DATE,
    date_10 DATE
);