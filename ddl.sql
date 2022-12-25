CREATE SCHEMA CAR_RENTAL_COMPANY ;

CREATE TABLE CAR_RENTAL_COMPANY.CAR(
Plate_id int not null,
Color varchar(225) not null,
Year int not null,
Brand varchar(225) not null,
Model varchar(225) not null,
Price_per_day decimal(10,2) not null,
Office_id int not null,
Status varchar(225) not null,
Image varchar(225) not null,
Primary key (Plate_id)
);

CREATE TABLE CAR_RENTAL_COMPANY.OFFICE(
Office_id int not null,
Office_name varchar(225) not null,
Country varchar(225) not null,
City varchar(225) not null,
Address varchar(225) not null,
Primary key (Office_id)
);

CREATE TABLE CAR_RENTAL_COMPANY.ADMIN(
Admin_id int not null,
Admin_name varchar(225) not null,
Email varchar(225) not null,
Password varchar(225) not null,
Primary key (Admin_id)
);

CREATE TABLE CAR_RENTAL_COMPANY.CUSTOMER(
national_id int not null,
Fname varchar(225) not null,
Lname varchar(225) not null,
Email varchar(225) not null,
Password varchar(225) not null,
phone_number varchar(225),
Country varchar(225) not null,
Sex varchar(225) not null,
licence_id int not null unique,
Primary key(national_id)
);

CREATE TABLE CAR_RENTAL_COMPANY.RESERVATION(
Reservation_id int not null unique,
national_id int not null,
Plate_id int not null,
Start_date varchar(225) not null,
End_date varchar(225) not null,
Primary key(national_id,Plate_id,Start_date)
);


ALTER TABLE CAR_RENTAL_COMPANY.CAR ADD FOREIGN KEY (Office_id) REFERENCES CAR_RENTAL_COMPANY.OFFICE  (Office_id) on delete cascade;
ALTER TABLE CAR_RENTAL_COMPANY.RESERVATION ADD FOREIGN KEY (Plate_id) REFERENCES CAR_RENTAL_COMPANY.CAR (Plate_id);
ALTER TABLE CAR_RENTAL_COMPANY.RESERVATION ADD FOREIGN KEY (national_id) REFERENCES CAR_RENTAL_COMPANY.CUSTOMER (national_id);
ALTER TABLE CAR_RENTAL_COMPANY.CAR ADD CONSTRAINT CK_Table_Status CHECK (Status IN ('active', 'out_of_service', 'rented','reserved','approved'));
ALTER TABLE CAR_RENTAL_COMPANY.CUSTOMER ADD CONSTRAINT CK_sex CHECK (Sex IN ('male','female'));