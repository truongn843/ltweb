create DATABASE db_assignment_web;

use db_assignment_web;

CREATE TABLE category
(
	cate_id int NOT NULL,
	cate_title VARCHAR(255) NOT NULL,
	PRIMARY KEY (cate_id)
);

INSERT INTO category
VALUES
	( 1, 'Áo thun');
INSERT INTO category
VALUES
	( 2, 'Áo sơ mi');
INSERT INTO category
VALUES
	( 3, 'Quần Jean');

CREATE TABLE products
(
	product_id char(5) not null,
	product_title varchar (255) NOT NULL,
	product_price decimal(10,2) NOT NULL,
	product_image VARCHAR(255) NOT NULL,
	product_desc VARCHAR(255) NOT NULL,
	product_category INT not null,
	primary key	(product_id),
	FOREIGN KEY	(product_category) REFERENCES category(cate_id)
);
INSERT INTO products
VALUES('11111', 'Áo thun cổ tròn (trắng)', 185000, '1-1.jpg 1-2.jpg', 'Chất liệu: Cotton Compact 2S<br>Phân loại: Áo thun form rộng<br>Màu: Trắng<br>', 1);
INSERT INTO products
VALUES('22222', 'Áo thun cổ tròn (đen)', 185000, '2-1.jpg 2-2.jpg','Chất liệu: Cotton Compact 2S<br>Phân loại: Áo thun form rộng<br>Màu: Đen<br>', 1);
INSERT INTO products
VALUES('33333', 'Áo thun cổ tròn (Xanh lá)', 185000, '3-1.jpg 3-2.jpg','Chất liệu: Cotton Compact 2S<br>Phân loại: Áo thun form rộng<br>Màu: Xanh lá<br>', 1);
INSERT INTO products
VALUES('44444', 'Áo thun cổ tròn (Vàng)', 185000, '4-1.jpg 4-2.jpg','Chất liệu: Cotton Compact 2S<br>Phân loại: Áo thun form rộng<br>Màu: Vàng<br>', 1);

CREATE TABLE user
(
	user_id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	name VARCHAR(255) NOT NULL,
	username char(20) NOT NULL,
	password char(20) NOT NULL,
	PRIMARY KEY(user_id)
);

INSERT INTO user
VALUES
	(1, 'vitran@gmail.com', 'Vi', 'vi', '111');
INSERT INTO user
VALUES
	(2, 'truongnguyen@gmail.com', 'Truong', 'truong', '222');
INSERT INTO user
VALUES
	(3, 'thenguyen@gmail.com', 'Nguyen', 'nguyen', '333');
INSERT INTO user
VALUES
	(4, 'khoanguyen@gmail.com', 'Khoa', 'khoa', '444');

CREATE TABLE user_profile
(
	email VARCHAR(255) NOT NULL,
	name VARCHAR(255) NOT NULL,
	username char(20) NOT NULL,
	address varchar(250),
	phonenumber char(11),
	avatar varchar(255) default 'user-icon.png',
	gender char(3),
	PRIMARY KEY(username)
);

INSERT INTO user_profile
VALUES
	('vitran@gmail.com', 'Trần Long Vĩ', 'vi', 'KTX Khu A ĐHQG, TP.HCM', '0341321339', 'user-icon.png', 'Nam');
INSERT INTO user_profile
VALUES
	('truongnguyen@gmail.com', 'Nguyễn Hữu Trường', 'truong', 'KTX Khu B ĐHQG, TP.HCM', '0333444555', 'user-icon.png', 'Nam');
INSERT INTO user_profile
VALUES
	('truongnguyen@gmail.com', 'Thế Nguyên', 'nguyen', null, null, 'user-icon.png', 'Nam');
INSERT INTO user_profile
VALUES
	('truongnguyen@gmail.com', 'Khoa Nguyễn', 'khoa', null, null, 'user-icon.png', 'Nam');

create trigger create_update_user
after INSERT
on user for each row
	INSERT into user_profile
	VALUES (NEW.email, NEW.name, NEW.username, null, null, 'user-icon.png', null);

CREATE TABLE cart
(
	product_id int NOT NULL,
	quantity int NOT NULL,
	username char(20) NOT NULL,
	address varchar(250),
	phonenumber char(11),
	PRIMARY KEY(username, product_id),
	foreign key(product_id) REFERENCES products(product_id)
);

create table rating
(
	rate_id INT NOT NULL AUTO_INCREMENT,
	username varchar(100) not null,
	product_id char(5) not null,
	review char(8) not null,
	comment varchar(255) not null,
	primary key(rate_id),
	foreign key(product_id) REFERENCES products(product_id)
);

INSERT into rating (username, product_id, review, comment)
VALUES ('vi', '11111', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('truong', '11111', 'Rất tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('vi', '22222', 'Tạm', 'Cũng được.');
INSERT into rating(username, product_id, review, comment)
VALUES ('truong', '22222', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('vi', '33333', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('truong', '33333', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('vi', '44444', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
INSERT into rating(username, product_id, review, comment)
VALUES ('truong', '44444', 'Tốt', 'Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.');
