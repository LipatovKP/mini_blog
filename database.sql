CREATE DATABASE mini_blog;
USE mini_blog;

CREATE TABLE posts (
                      id INT unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      title VARCHAR(255) NOT NULL,
                      content TEXT NOT NULL,
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

                      )ENGINE=InnoDB DEFAULT CHARSET=utf8;
