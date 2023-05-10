CREATE TABLE tblbooks (
	bookid		int				not null,
	title		varchar(50)		not null,
	author		varchar(50)		not null,
	genre		varchar(50)		not null,
	price		varchar(5)		not null,
	description	varchar(50)		not null,
	primary key (bookid));
	
INSERT INTO tblbooks (bookid, title, author, genre, price, description, image) VALUES
	(1, 'Crying', 'Jon Bon Jovi', 'Autobiography', '$20', 'hi hi hi'),
	(2, 'Dancing', 'Whitney Houston', 'Autobiography', '$15', 'hi hi hi'),
	(3, 'Singing', 'Miley Cyrus', 'Fiction', '$17', 'hi hi hi'),
	(4, 'Running', 'John Smith', 'Nonfiction', '$12','hi hi hi'),
	(5, 'So You Think You Can Cook', 'Remi from Ratatouille', 'Autobiography', '$22', 'hi hi hi');
	(37, 'MCDP1 Warfighting', 'USMC', 'Military', '$17.76', 'A charge to every officer to read and understand the warfighting philosophy of the United States Marine Corps! Rah!', 'https://swe.umbc.edu/~srodrig1/bootstrap-5.3.0-alpha3-examples/carousel/book36.jpeg'),
	(38, 'The Most Dangerous Game', 'Richard Connell', 'Fiction', '$5', 'Richard Connell''s most popular tale, The Dangerous Game, also published as The Hounds of Zaroff, is a perfect example of Connell''s impressive talent and distinct style. Still frequently adapted for stage and screen nearly a century after it first appeared, it is the fascinating and exciting tale of Sanger Rainsford, an experienced big-game hunter. Rainsford suddenly finds himself the hunted when he is ship-wrecked on a seemingly deserted island. There he finds General Zaroff, a retired military man, who has grown bored of hunting animals and now spends his time hunting human sailors who get stranded on his island. Rainsford must fight for his life against the clever Zaroff in Connell''s suspenseful and intriguing tale. This edition is printed on premium acid-free paper.,'https://swe.umbc.edu/~srodrig1/bootstrap-5.3.0-alpha3-examples/carousel/book37.jpeg');

', 'https://swe.umbc.edu/~srodrig1/bootstrap-5.3.0-alpha3-examples/carousel/book37.jpeg');