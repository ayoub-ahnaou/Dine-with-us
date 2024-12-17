create database dine_with_us;
use dine_with_us;

-- creating the 'user' table
create table user (
	user_id int primary key auto_increment,
    username varchar(25),
    phone varchar(20),
    email varchar(100),
    password varchar(16)
);

-- creating the 'role' table (chef, client...)
create table role (
	role_id int primary key auto_increment,
    role_name varchar(10)
);

-- creating the 'reservation' table
create table reservation (
	reservation_id int primary key auto_increment,
    reservation_date datetime
);

-- creating the 'menu' table
create table menu (
	menu_id int primary key auto_increment,
	menu_title varchar(25),
	menu_description varchar(255)
);

-- creating the 'plat' table
create table plat (
	plat_id int primary key auto_increment,
    plat_title varchar(25),
    plat_description varchar(255),
    ingredients varchar(255)
);

-- creating the 'reservation_menu' table, this table is created because of many-to-many relation between the reservation table and menu table
create table reservation_menu (
	reservation_id int,
    menu_id int,
    primary key (reservation_id, menu_id),
    foreign key (reservation_id) references reservation(reservation_id),
    foreign key (menu_id) references menu(menu_id)
);

-- add the foreign key 'role_id' to 'user' table
alter table user add role_id int;
alter table user add constraint foreign key (role_id) references role(role_id);

-- add the foreign key 'user_id' to 'reservation' table
alter table reservation add user_id int;
alter table reservation add constraint foreign key (user_id) references user(user_id);

-- add the foreign key 'menu_id' to 'plat' table
alter table plat add menu_id int;
alter table plat add constraint foreign key (menu_id) references menu(menu_id);