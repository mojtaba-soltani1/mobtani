<?php
if( ! defined('DBHOST') )
    define( 'DBHOST', 'sql200.b6b.ir' );
if( ! defined('DBUSER') )
    define( 'DBUSER', 'b6bi_27935362' );
if( ! defined('DBPASS') )
    define( 'DBPASS', '09162104880' );
if( ! defined('DBNAME') )
    define( 'DBNAME', 'b6bi_27935362_800' );

if( ! defined('CHARSET') )
	define( 'CHARSET', 'utf8mb4' );
if( ! defined('COLLATE') )
	define( 'COLLATE', 'utf8mb4_general_ci' );  // utf8mb4_persian_ci

$dbHost =	DBHOST;
$dbUser =	DBUSER;
$dbPass =	DBPASS;
$dbName =	DBNAME;

$charset =	CHARSET;
$collate =	COLLATE;

$softSetup = false;