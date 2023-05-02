CREATE TABLE tblbooks (
	bookid		int				not null,
	title		varchar(50)		not null,
	author		varchar(50)		not null,
	genre		varchar(50)		not null,
	price		varchar(5)		not null,
	description	varchar(50)		not null,
	primary key (bookid));
	
INSERT INTO tblbooks VALUES
	(1, 'Crying', 'Jon Bon Jovi', 'Autobiography', '$20', 'hi hi hi'),
	(2, 'Dancing', 'Whitney Houston', 'Autobiography', '$15', 'hi hi hi'),
	(3, 'Singing', 'Miley Cyrus', 'Fiction', '$17', 'hi hi hi'),
	(4, 'Running', 'John Smith', 'Nonfiction', '$12','hi hi hi'),
	(5, 'So You Think You Can Cook', 'Remi from Ratatouille', 'Autobiography', '$22', 'hi hi hi');
	