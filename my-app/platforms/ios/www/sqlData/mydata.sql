CREATE DATABASE tutorfinder;

DROP TABLE IF EXISTS markerdata;
CREATE TABLE markerdata (
  id       int not null auto_increment,
  lng      float(10,6),
  lat       float(10,6),
  name    varchar(200), 
  stars    integer(11),
  subject    varchar(500),
  level   integer(11),
  price   varchar(60),
  primary key (id)
);

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
  img ,
  video_link,
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



INSERT INTO markerdata VALUES
('1','-25.363882','131.044922','mountains','1','maths','1','10');
INSERT INTO markerdata VALUES
('2','-26.363882','132.044922','desert','2','english','2','20');
INSERT INTO markerdata VALUES
('3','51.415482','-0.217837','mountains','1','maths','1','07');
INSERT INTO markerdata VALUES
('4','51.490791','-0.161360','mountains','3','english','3','10');

