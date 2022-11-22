DROP TABLE books;
DROP TABLE users;

CREATE TABLE users (
	`id` 					INT PRIMARY KEY AUTO_INCREMENT,
	`username` 		VARCHAR(50) NOT NULL,
	`email`   		VARCHAR(255) NOT NULL,
	`password` 		CHAR(60) NOT NULL,
	`created_at` 	DATETIME DEFAULT NOW()
);

CREATE TABLE books (
	`id` 			INT PRIMARY kEY AUTO_INCREMENT,
	`user_id`	INT,
	`title`		VARCHAR(255),
	`author`	VARCHAR(255),
	`rating`	INT,
	CONSTRAINT FK_users_user_id FOREIGN KEY(`user_id`)
		REFERENCES `users`(`id`)
		ON DELETE SET NULL
		ON UPDATE CASCADE
);

INSERT INTO users(`username`, `email`, `password`) VALUES ('admin', 'admin@admin.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');
INSERT INTO users(`username`, `email`, `password`) VALUES ('psantos', 'test@test.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');
INSERT INTO users(`username`, `email`, `password`) VALUES ('johndoe', 'john@john.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');

INSERT INTO books(`user_id`,`title`,`author`,`rating`) VALUES (2, 'Narnia', 'C. S. Lewis', 4);
INSERT INTO books(`user_id`,`title`,`author`,`rating`) VALUES (2, 'Harry Potter', ' J. K. Rowling', 5);
INSERT INTO books(`user_id`,`title`,`author`,`rating`) VALUES (2, 'LOTR', 'J. R. R. Tolkien', 5);
INSERT INTO books(`user_id`,`title`,`author`,`rating`) VALUES (3, 'Chair de poule', 'Robert Lawrence Stine', 5);
INSERT INTO books(`user_id`,`title`,`author`,`rating`) VALUES (3, 'Le Trône de fer', 'George R. R. Martin', 3);
