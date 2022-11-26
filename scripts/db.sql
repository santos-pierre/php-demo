DROP DATABASE IF EXISTS books-app;
CREATE DATABASE books-app;

USE books-app;

DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
	`id` 					INT PRIMARY KEY AUTO_INCREMENT,
	`username` 		VARCHAR(50) NOT NULL,
	`email`   		VARCHAR(255) NOT NULL,
	`password` 		CHAR(60) NOT NULL,
	`created_at` 	DATETIME DEFAULT NOW()
);

CREATE TABLE books (
	`id` 			INT PRIMARY KEY AUTO_INCREMENT,
	`user_id`	INT,
	`title`		VARCHAR(255) NOT NULL,
	`author`	VARCHAR(255) NOT NULL,
	`rating`	INT(1) DEFAULT 0,
	`comment`	VARCHAR(255) NULL DEFAULT NULL,
	`created_at` 	DATETIME DEFAULT NOW(),
	CONSTRAINT FK_books_user_user_id FOREIGN KEY(`user_id`)
		REFERENCES `users`(`id`)
		ON DELETE SET NULL
		ON UPDATE CASCADE,
	CONSTRAINT CK_books_rating CHECK (`rating` BETWEEN 0 AND 5)
);

INSERT INTO users(`username`, `email`, `password`) VALUES ('admin', 'admin@admin.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');
INSERT INTO users(`username`, `email`, `password`) VALUES ('psantos', 'test@test.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');
INSERT INTO users(`username`, `email`, `password`) VALUES ('johndoe', 'john@john.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');

INSERT INTO books(`user_id`,`title`,`author`,`rating`, `comment`)
	VALUES (2, 'Narnia', 'C. S. Lewis', 4, 'Lorem ipsum dolor sit amet. Et minima accusamus aut officiis sunt et tenetur facilis id tempore voluptas. In dolor quaerat aut reprehenderit minima non unde aspernatur a');
INSERT INTO books(`user_id`,`title`,`author`,`rating`, `comment`)
	VALUES (2, 'Harry Potter', ' J. K. Rowling', 5, 'Lorem ipsum dolor sit amet. Et minima accusamus aut officiis sunt et tenetur facilis id tempore voluptas. In dolor quaerat aut reprehenderit minima non unde aspernatur a');
INSERT INTO books(`user_id`,`title`,`author`,`rating`, `comment`)
	VALUES (2, 'LOTR', 'J. R. R. Tolkien', 5, 'Lorem ipsum dolor sit amet. Et minima accusamus aut officiis sunt et tenetur facilis id tempore voluptas. In dolor quaerat aut reprehenderit minima non unde aspernatur a');
INSERT INTO books(`user_id`,`title`,`author`,`rating`, `comment`)
	VALUES (3, 'Chair de poule', 'Robert Lawrence Stine', 5, 'Lorem ipsum dolor sit amet. Et minima accusamus aut officiis sunt et tenetur facilis id tempore voluptas. In dolor quaerat aut reprehenderit minima non unde aspernatur a');
INSERT INTO books(`user_id`,`title`,`author`,`rating`, `comment`)
	VALUES (3, 'Le Trône de fer', 'George R. R. Martin', 3, 'Lorem ipsum dolor sit amet. Et minima accusamus aut officiis sunt et tenetur facilis id tempore voluptas. In dolor quaerat aut reprehenderit minima non unde aspernatur a');
