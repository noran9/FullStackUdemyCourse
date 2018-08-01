<?php 

$dbhost = 'localhost';
$dbport = 5432;
$dbname  = 'acne';
$dbuser = 'devuser';
$dbpass = '123456';

$con = pg_connect('host='.$dbhost .' port='.$dbport.' dbname='.$dbname.' user='.$dbuser.' password='.$dbpass);

