CREATE DATABASE marriage_site;

USE marriage_site;

CREATE TABLE user (
    pId INTEGER PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(600), 
    profession VARCHAR(600), 
    email VARCHAR(300), 
    phone INTEGER, 
    pwd TEXT, 
    dob DATE, 
    religion VARCHAR(10), 
    caste VARCHAR(6), 
    searching VARCHAR(6), 
    dp BLOB, 
    description TEXT, 
    first_marriage BOOLEAN, 
    approved BOOLEAN 
);
ALTER TABLE user ADD COLUMN unid DOUBLE(10, 0) AFTER pId;
ALTER TABLE user CHANGE unid unid BIGINT;
ALTER TABLE user CHANGE unid unid TEXT;
SELECT * FROM  user;
UPDATE user SET approved=0 WHERE pId=1;
CREATE TABLE denied (
    pId INTEGER PRIMARY KEY,
    fullname VARCHAR(600), 
    email VARCHAR(300), 
    phone INTEGER, 
    pwd TEXT, 
    searching VARCHAR(6), 
    dp BLOB
);
CREATE TABLE marriage_site.physical_details (
    relId INTEGER,
    pId INTEGER PRIMARY KEY AUTO_INCREMENT,
    height_ft INTEGER,
    height_in INTEGER,
    weight INTEGER,
    eye_color VARCHAR(70),
    color VARCHAR(100),
    age INTEGER,
    FOREIGN KEY(relId) REFERENCES user(pId)
);

SELECT * FROM user FULL JOIN physical_details HAVING physical_details.relId=16;

SELECT * FROM user 
INNER JOIN physical_details 
ON user.pId = physical_details.relId;

SELECT * FROM marriage_site.physical_details;
CREATE TABLE pictures (
    relId INTEGER,
    pId INTEGER PRIMARY KEY AUTO_INCREMENT,
    photo BLOB,
    FOREIGN KEY(relId) REFERENCES user(pId)
);
CREATE TABLE job (
    relId INTEGER,
    pId INTEGER PRIMARY KEY AUTO_INCREMENT,
    job_title VARCHAR(150),
    company VARCHAR(150),
    salary_from DOUBLE(100, 4),
    salary_to DOUBLE(100, 4),
    FOREIGN KEY(relId) REFERENCES user(pId)
);
SELECT * FROM job;
CREATE TABLE residence (
    relId INTEGER,
    city VARCHAR(100),
    own_house BOOLEAN,
    have_dependents BOOLEAN,
    have_siblings BOOLEAN,
    numOfSiblings INTEGER,
    sibligNum INTEGER,
    numOfProperties INTEGER,
    address TEXT,
    FOREIGN KEY(relId) REFERENCES user(pId)
);
CREATE TABLE admins (
	aID INTEGER PRIMARY KEY AUTO_INCREMENT,
    admin_id VARCHAR(300),
    admin_pwd TEXT
);
ALTER TABLE admins AUTO_INCREMENT=100000;
INSERT INTO marriage_site.admins(admin_id, admin_pwd) VALUES("sai", "5a3b74214ded0e083516b60f8e959ad2");
SELECT * FROM marriage_site.admins;