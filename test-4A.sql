-- create type_tb table
create table type_tb (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    PRIMARY KEY (id)
);
--  create heroes_tb table
create table heroes_tb (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    type_id int NOT NULL,
    photo varchar(200),
    PRIMARY KEY (id),
    FOREIGN KEY (type_id) REFERENCES type_tb(id)
);
-- insert type of heroes
insert into type_tb (name)
values
("Tank"),
("Assassin"),
("Warior"),
("Fighter"),
("Marksman"),
("Mage"),
("Support");

-- insert heroes 
insert into heroes_tb (name, type_id, photo)
values
("Akai", 1, "https://vignette.wikia.nocookie.net/mobile-legends/images/c/c1/Akai.png"),
("Franko", 1, "https://vignette.wikia.nocookie.net/mobile-legends/images/4/48/Franco.png"),
("Grock", 1, "https://vignette.wikia.nocookie.net/mobile-legends/images/2/2b/Grock.png"),
("Jhonson", 1, "https://vignette.wikia.nocookie.net/mobile-legends/images/5/56/Johnson.png"),
("Alucard", 4, "https://vignette.wikia.nocookie.net/mobile-legends/images/e/e7/Alucard.png"),
("Sun", 4, "https://vignette.wikia.nocookie.net/mobile-legends/images/6/61/Sun.png"),
("Zilong", 2, "https://vignette.wikia.nocookie.net/mobile-legends/images/6/66/Zilong.png"),
("Harley", 6, "https://vignette.wikia.nocookie.net/mobile-legends/images/e/e4/Harley.png"),
("Moskov", 5, "https://vignette.wikia.nocookie.net/mobile-legends/images/8/82/Moskov.png"),
("Diggie", 7, "https://vignette.wikia.nocookie.net/mobile-legends/images/9/93/Diggie.png"),
("Kaja", 7, "https://vignette.wikia.nocookie.net/mobile-legends/images/1/16/Kaja.png");

-- jawaban soal A1
select * from heroes_tb join type_tb on heroes_tb.type_id = type_tb.id;

-- jawaban soal A2
select * from heroes_tb where type_id=1;

-- jawaban soal A3
select heroes_tb.id, heroes_tb.name, type_tb.name from heroes_tb join type_tb on heroes_tb.type_id = type_tb.id;
