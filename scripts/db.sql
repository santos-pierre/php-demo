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
	`name`		VARCHAR(255),
	`author`	VARCHAR(255),
	`rating`	INT,
	CONSTRAINT FK_users_user_id FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
)


INSERT INTO users(`username`, `email`, `password`) VALUES ('admin', 'admin@admin.com', '$2y$10$xH.JIE75EyCyoWdbmqDSW.kAnEgMouvpftuqc.G1/ZSTwu1Rjn2mS');
