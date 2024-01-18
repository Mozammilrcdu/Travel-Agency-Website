create database booking;
use booking;
create table book_form(SNo INT auto_increment, PRIMARY KEY(SNo) ,name Varchar(255), email Varchar(255), phone bigint(10), address Varchar(255), location Varchar(255), guests int(255), arrivals Date, leaving Date);