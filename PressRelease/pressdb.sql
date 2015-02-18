DROP DATABASE IF EXISTS press_db;

CREATE DATABASE press_db;

USE press_db;
 
CREATE TABLE users (
  userID           INT            NOT NULL   AUTO_INCREMENT,
  username      VARCHAR(55)   NOT NULL,
  password          VARCHAR(255)   NOT NULL,
  city         VARCHAR(255)   NOT NULL,
  state          VARCHAR(255)   NOT NULL,
  country VARCHAR(255),
  isAdmin           TINYINT(1)     NOT NULL   DEFAULT 0,             
  PRIMARY KEY (username)
);
CREATE TABLE PressRelease (
  pressReleaseID       INT(11)        NOT NULL   AUTO_INCREMENT,
  headline     VARCHAR(50)   NOT NULL,
  summary VARCHAR(100) NOTNULL,
newsbody VARCHAR(255)   NOT NULL,
companyName VARCHAR(25)   NOT NULL,
companyEmail VARCHAR(55)   NOT NULL,
author VARCHAR(55) NOT NULL,
  PRIMARY KEY (pressReleaseID)
);
INSERT INTO users VALUES
(1, 'raj','abc','Fremont','CA','USA',1),
(2, 'rajitha','xyz','Foster City', 'CA', 'USA',0),
(3, 'vodela','def','Sunnyvale','CA','USA',0);



INSERT INTO PressRelease VALUES
(1, 'OPT','Optional PracticalTraining','Students are allowed to work on their field of study after comletion of their Graduation','RAJGROUP','raj@raj.com','raj'),
(2, 'CPT','Curricular Practical Training','Students are allowed to work for  Part/Full time on their field of study during their study of Course','RAJGROUPs','raji@raj.com','vodela');




GRANT SELECT, INSERT, DELETE, UPDATE
ON press_db.*
TO root
IDENTIFIED BY 'deepthi0208';


GRANT SELECT
ON pressreleases
TO root
IDENTIFIED BY 'deepthi0208';

