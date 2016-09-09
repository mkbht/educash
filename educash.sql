CREATE TABLE IF NOT EXISTS users
(
	user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	first_name VARCHAR(255) NOT NULL,
	last_name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	gender VARCHAR(20) NOT NULL,
 	country VARCHAR(255) NOT NULL,
 	address VARCHAR(255),
 	phone_no VARCHAR(20),
 	profile_picture VARCHAR(255),
 	created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
 	updated_at TIMESTAMP NOT NULL

);

CREATE TABLE IF NOT EXISTS posts
(
	post_id int not null AUTO_INCREMENT PRIMARY KEY,
	user_id int not null,
	title varchar(255) not null,
	content text not null,
	thumbnail varchar(255) not null,
 	created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
 	updated_at TIMESTAMP NOT NULL
);

CREATE TABLE IF NOT EXISTS pages
(
	page_id int not null AUTO_INCREMENT PRIMARY KEY,
	title varchar(255) not null,
	content text not null,
 	created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
 	updated_at TIMESTAMP NOT NULL
);



