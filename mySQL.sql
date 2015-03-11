CREATE DATABASE ma301ba_tutorFinder;


DROP TABLE IF EXISTS parentReg;
CREATE TABLE parentReg (
  parent_id int NOT NULL AUTO_INCREMENT,
  firstname    varchar(50), 
  lastname    varchar(50),
  email    varchar(500),
  password   varchar(50),
  primary key (parent_id)
);