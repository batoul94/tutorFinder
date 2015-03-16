CREATE DATABASE tutorfinder;



CREATE TABLE markersdata (
  id       int not null auto_increment,
  lng      float(10,6),
  lat       float(10,6),
  stars    integer(11),
  firstname    varchar(60), 
  lastname    varchar(60), 
  gender    varchar(60), 
  bday    date, 
  address varchar(400),
  postcode varchar(100),
  city varchar(100),
  usrtel int,
  qualification varchar(600),
  profile varchar(600),
  subjects    varchar(500),
  level   varchar(500),
  price   varchar(60),
  availability varchar(600),
  img text,
  video_link text,
  email varchar(100),
  password varchar(100),
  primary key (id)
);

DROP TABLE IF EXISTS parentReg;
CREATE TABLE parentReg (
  parent_id int NOT NULL AUTO_INCREMENT,
  firstname    varchar(50), 
  lastname    varchar(50),
  email    varchar(500),
  password   varchar(50),
  primary key (parent_id)
);



