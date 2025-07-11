CREATE DATABASE IF NOT EXISTS movie_platform;
USE movie_platform;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  password VARCHAR(50)
);

CREATE TABLE movies (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  filename VARCHAR(100)
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  movie_id INT,
  user VARCHAR(50),
  comment TEXT
);
