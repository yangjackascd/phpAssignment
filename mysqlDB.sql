create database hyxx;
use hyxx;

CREATE TABLE user (
  id INT(8) NOT NULL AUTO_INCREMENT,
  name varchar(30) DEFAULT NULL,
  phone varchar(30)  DEFAULT NULL,
  email varchar(30),
  address varchar(30),
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE orderList(
  id INT(8) NOT NULL AUTO_INCREMENT,
  tires varchar(10) DEFAULT NULL,
  oil varchar(10)  DEFAULT NULL,
  spark varchar(10) DEFAULT NULL,
  address varchar(100),
  savedate datetime,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE member(
  id INT(8) NOT NULL AUTO_INCREMENT,
  username varchar(10) DEFAULT NULL,
  passwd varchar(10)  DEFAULT NULL,
  permissions varchar(10) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into member(username,passwd,permissions) values('admin','123','1');
insert into member(username,passwd,permissions) values('other','123','2');


CREATE TABLE brands(
  id INT(8) NOT NULL AUTO_INCREMENT,
  brandname varchar(10) DEFAULT NULL,
  descript varchar(100)  DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE products(
  id INT(8) NOT NULL AUTO_INCREMENT,
  productdname varchar(10) DEFAULT NULL,
  descript varchar(100)  DEFAULT NULL,
  price varchar(100)  DEFAULT NULL,
  grandid int(8)  NOT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE account(
  id INT(8) NOT NULL AUTO_INCREMENT,
    username varchar(100) DEFAULT NULL,
  name varchar(100) DEFAULT NULL,
  passwd varchar(100)  DEFAULT NULL,
  address varchar(100)  DEFAULT NULL,
  phone varchar(100)  DEFAULT NULL,
  email varchar(100)  DEFAULT NULL,
  acountno varchar(100)  DEFAULT NULL,
  acounttype varchar(10)  DEFAULT NULL,
  accoutcount int(100) DEFAULT 0,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


insert into account(name,username,passwd,address,phone,email,acountno,acounttype,accoutcount) values('lee','admin','123','china','1360000','ft@123.com','1234567','01',1350);
insert into account(name,username,passwd,address,phone,email,acountno,acounttype,accoutcount) values('chen','root','123','china','1360000','qw@123.com','123111','02',1250);
insert into account(name,username,passwd,address,phone,email,acountno,acounttype,accoutcount) values('fu','other','123','china','1360000','wo@123.com','2113144','03',14450);





