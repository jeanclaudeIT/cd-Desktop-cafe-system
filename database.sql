CREATE DATABASE cafe_system;
USE cafe_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    ip_address VARCHAR(50),
    status VARCHAR(20) DEFAULT 'offline'
);

CREATE TABLE sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    start_time DATETIME,
    end_time DATETIME,
    cost DECIMAL(10,2)
);
