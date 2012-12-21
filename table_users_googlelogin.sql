CREATE TABLE users
(
id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(50) UNIQUE, 
fullname VARCHAR(100),
firstname VARCHAR(50),
lastname VARCHAR(50),
google_id VARCHAR(50),
gender VARCHAR(10),
dob VARCHAR(15),
profile_image TEXT,
gpluslink TEXT
)