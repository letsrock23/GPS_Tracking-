<?php 
define('DB_HOST', 'ENTER_DATABASE_HOST'); //ENTER_DATABASE_HOST
define('DB_USERNAME', 'u877803252_bus_location'); //ENTER_DATABASE_USERNAME
define('DB_PASSWORD', 'busLocation#22');// ENTER_DATABASE_PASSWORD
define('DB_NAME', 'u877803252_bus_location');//ENTER_DATABASE_NAME

//if want to use google map. then enter goolgle_API key.
//API can be found from google map website.
define('GOOGLE_MAP_API_KEY', 'ENTER_GOOGLE_MAP_API_KEY');

//ESP32_API_KEY is the exact duplicate of, ESP32_API_KEY in ESP32 sketch file
//Both values must be same
define('ESP32_API_KEY', 'Ad5F10jkBM0');

//http://www.example.com/gpsdata.php
define('POST_DATA_URL', 'ENTER_ESP32_API_KEY');

date_default_timezone_set('Asia/Dhaka');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}