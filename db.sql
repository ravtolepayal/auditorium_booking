create database auditorium;

\c auditorium   //You are now connected to database "auditorium" as user "postgres".


create table customer(cust_id SERIAL primary key,cust_name varchar(30),cust_city varchar(20),cust_phone varchar(10),cust_email varchar(20),cust_userid varchar(20),user_pwd varchar(15));

create table custlogin(userid varchar(10),cust_pswd varchar(10),cust_id int references customer(cust_id));

create table image(id serial,name varchar(30) not null);
select * from image;

create table book(id serial,cname varchar(20),city varchar(20),contact int,date char(10),start_time time,end_time time,discription varchar(20),cust_id int references customer(cust_id));


