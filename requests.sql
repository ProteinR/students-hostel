CREATE TABLE students(
	id serial,
	fio VARCHAR(30),
	gender boolean,
	block char(1),
	passport VARCHAR(20),
	fac_id int,
	course int,
	group_number VARCHAR(5),
	room_id int,
	personal_phone VARCHAR(15),
	parents_phone VARCHAR(15),
	home_address VARCHAR (30)
);


CREATE TABLE duty(
	id serial,
	date_of_duty date,
	student_id int
);


CREATE TABLE payment(
	id serial,
	student_id int,
	expires date
);


CREATE TABLE faculties(
	id serial,
	fac_name VARCHAR (20)
);

CREATE TABLE rooms(
	id serial,
	room_number int,
	places_count int,
);

--Назначение первичного ключа в существующей таблице
ALTER TABLE students
ADD CONSTRAINT pk_students PRIMARY KEY (id)

ALTER TABLE payment
ADD CONSTRAINT pk_payment PRIMARY KEY (id)

ALTER TABLE faculties
ADD CONSTRAINT pk_faculties PRIMARY KEY (id)

ALTER TABLE rooms
ADD CONSTRAINT pk_rooms PRIMARY KEY (id)


-- Создание вторичного ключа для таблицы дежурства
ALTER TABLE duty
ADD CONSTRAINT fk_student_id FOREIGN KEY (student_id) REFERENCES
students(id)

--Добавить ффакультет
INSERT INTO faculties (fac_name)
VALUES('ФИТКБ')

INSERT INTO faculties (fac_name)
VALUES('ИНК')

INSERT INTO faculties(fac_name)
VALUES('Журналистики')

--Добавить комнату
INSERT INTO rooms (room_number, places_count)
VALUES (1,3)


--Добавить нового студента
INSERT INTO students (fio,gender, block, passport, fac_id, course, group_number, 
	room_id, personal_phone, parents_phone, home_address )
VALUES ('Иванов Иван Иванович', true, 'A', 'AApassport11', 1, 1, 343, 1, '777-47-97', '888-56-48', 'Одесса, Добровольского 42')


--Поиск по имени студентов
SELECT fio, gender, block, passport, fac_name, course, group_number, room_number, personal_phone, parents_phone, home_address
FROM students, faculties, rooms
WHERE fac_id = faculties.id AND room_id = rooms.id AND fio LIKE 'Иванов%'

--независимо от регистра
SELECT fio, gender, block, passport, fac_name, course, group_number, room_number, personal_phone, parents_phone, home_address
FROM students, faculties, rooms
WHERE fac_id = faculties.id AND room_id = rooms.id AND LOWER(fio) LIKE LOWER('%иванов%')

