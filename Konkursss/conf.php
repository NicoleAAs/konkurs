<?php
$servernimi='localhost';
$kasutajanimi='nicole';
$parool='123456';
$admebaasinimi='nicole';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$admebaasinimi);
$yhendus->set_charset('utf8');
/*CREATE TABLE konkurss(
	id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    pilt text,
    lisamisaeg datetime,
    punktid int default 1,
    kommentaar text,
    avalik int default 1
);*/