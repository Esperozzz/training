<?php

error_reporting(-1);

define('USER_NAME', 'root');
define('USER_PASSWORD', '');
define('HOST_NAME', '127.0.0.1');
define('DB_NAME', 'marlindb');

$dsn = 'mysql:dbname='. DB_NAME . ';host=' . HOST_NAME;

try {
    $pdo = new PDO($dsn, USER_NAME, USER_PASSWORD);
} catch (PDOException $error) {
    echo 'Не удалось подключиться к базе данных' . $error->getMessage();
}

/* Задание №7
CREATE TABLE users (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name TINYTEXT NOT NULL,
    image VARCHAR(255) DEFAULT '#',
    profession TINYTEXT,
    user_type TINYTEXT,
    twitter TINYTEXT,
    wrapbootstrap_link TINYTEXT,
    banned TINYINT(1) DEFAULT 0
);
*/
/* Задание №7
INSERT INTO users (`name`,`image`,`profession`,`user_type`,`twitter`,`wrapbootstrap_link`,`banned`) VALUES
    ('Sunny A.','img/demo/authors/sunny.png','UI/UX Expert','Lead Author','@myplaneticket','myorange', 0),
    ('Jos K.','img/demo/authors/josh.png','ASP.NET Developer','Partner &amp; Contributor','@atlantez','Walapa', 0),
    ('Jovanni L.','img/demo/authors/jovanni.png','PHP Developer','Partner &amp; Contributor','@lodev09','lodev09',1),
    ('Roberto R.','img/demo/authors/roberto.png','Rails Developer','Partner &amp; Contributor','@sildur','sildur',1);
*/


/* Задание №8
CREATE TABLE task8 (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name TINYTEXT NOT NULL,
    last_name TINYTEXT NOT NULL,
    username TINYTEXT NOT NULL
);
*/
/* Задание №8
INSERT INTO task8 (`first_name`,`last_name`,`username`) VALUES
    ('Mark','Otto','@mdo'),
    ('Jacob','Thornton','@fat'),
    ('Larry','the Bird','@twitter'),
    ('Larry the Bird','Bird','@twitter');
*/
/* Задание №9
CREATE TABLE task9 (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    text VARCHAR(500) NOT NULL,
    UNIQUE KEY (text)
);
*/
