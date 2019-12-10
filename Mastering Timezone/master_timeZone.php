<?php
//Suppose we are creating a global application and we need to show the as per location
//if it is now 11.30pm in Bangladesh, in USA it is 1.30pm and it is noon.
//so, the time will save in database locally but in app it will show globally
//php hase several functions to do this job

//To see the timezone of server
echo date_default_timezone_get(); //output: europe/berlin as it is default

//But we can set as our own
date_default_timezone_set('Asia/Dhaka');
echo date_default_timezone_get(); //now it is dhaka

//lets see the time and date of Bangladesh
echo '<br/>';
echo date('m:d:Y G:i A');

//The timestamp is different for web server and database server. DB stores time as per its timezone.
//There is a way to solve this issue. We will save the time in DB as DB timestamp
//but we will show the time based on client timezone


//creating a datetime object 
//datetime object takes 3 parameters 
//1st is the format we want to convert, here default db format : 'Y-m-d H:i:s'
//2nd one is the date time we will convert
//3rd parameter is the timezone we want to set 

//DB timezone
$db_zone = 'Asia/Dhaka';
$client_zone = 'America/New_York';
//Date time object create 
$db_time = DateTime::createFromFormat('Y-m-d H:i:s', '2019-12-10 08:15:30', new DateTimeZone($db_zone));

//now convert to the timezone that we want (America)
$date = $db_time->setTimeZone(new DateTimeZone($client_zone));
echo '<br/>';
echo $date->format('d M y h:i:s A');

//create another one
$database_zone = "America/Los_Angeles";
$customer_zone = "Asia/Dhaka";

$databaseTime = DateTime::createFromFormat('Y-m-d H:i:s', "2019-12-9 9:45:30", new DateTimeZone($database_zone));

$customerTime = $databaseTime->setTimeZone(new DateTimeZone($customer_zone));
echo '<br/>';
echo $customerTime->format('d M y h:i A');