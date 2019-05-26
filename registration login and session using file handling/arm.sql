create database sell;
use sell ;
create table selllist(
id int not null auto_increment,
name varchar(80) not null,
price int not null,
primary key(id)

);

select*from selllist;