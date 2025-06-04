CREATE DATABASE auto_gruzia;
USE auto_gruzia;

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);