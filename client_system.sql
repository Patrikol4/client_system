CREATE DATABASE client_system; 

CREATE TABLE clients (
	id int (11) not null PRIMARY KEY,
	name varchar(255),
	surname varchar(255), 
	address varchar(255),
	buyed_items varchar(255));
