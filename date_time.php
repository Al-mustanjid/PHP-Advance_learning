<?php
/* while we talk about a website, we almost need date time in a forum or any other sites. 
It is very critical to set up date time as there are many fragments 
such date can be 2019/11/29, 29-11-2019 etc and in time the hour is 24 or 12, the min and sec are 60. 
Php provides date() function to set date and time.*/

/*==============================================================================
    date(format, timestamp)
    This function has 2 parameters: format, timestamp
    *Format parameter set up how to show date or time, 
    *timestamp is optional, if we skip it it will show current date time. But we also use it for setting up which day is to be shown from the day u set.
================================================================================*/

//lets see an example
echo "Today's date (Format 1): ".date("d.m.Y")."<br/>"; //we have already known we can change date format in php
echo "Today's date (Format 2): ".date("Y/m/d")."<br/>";
echo "Today's date (Format 3): ".date("d/m/Y")."<br/>"; //as we wish and want we can do that.

/* **notice: timestamp has not been used in date function but it still works */

// Lets create a time for that will count as tommorrow

$next_day = mktime(0,0,0, date('m'), date('d')+1, date('Y')); //mktime() is a builtin php function which is used to create date
//notice we have taken 3 parameters 0,0,0 as it means we need three things m, d, y
//as we will show next day thats why we add +1 with day
echo 'The next day is: '.date('d/m/Y', $next_day).'<br/>';

//now lets see some format parameters which can use in date function for different purposes.

/*---------------------------------------
    About Day Activities
---------------------------------------*/
// d- this will show the single number date such as 1, 2 with 01, 02 etc.
// j- this will show without 0
//*if you are running this code not on a single day, then there will be no difference
echo date('d').'<br/>';
echo date('j').'<br/>';

//D- this will show the first three letter of the day 
// l- this will show full name of the day
echo date('D').'<br/>';
echo date('l').'<br/>';

/*---------------------------------------
    About Month Activities
---------------------------------------*/
// F- this will show the month name
echo date('F').'<br/>';

// if we want to see the month in number version with 0 then put m
echo date('m').'<br/>';
//To see without 0 put n
echo date('n').'<br/>';
//to see the first three letter of the month put M
echo date('M').'<br/>';

/*---------------------------------------
    About Year Activities
---------------------------------------*/
//To see year just put Y
echo date('Y').'<br/>';

/*---------------------------------------
    About Time and Hour
---------------------------------------*/
//while we want to show or know the hour in 12hr format then we have to use g
echo "current hr (12hr format): ".date('g').'<br/>';
//while we want to show or know the hour in 24hr format then we have to use G
echo "current hr (24hr format): ".date('G').'<br/>';
//while we want to show or know the hour in time with am or pm in 12 hr format, for lowercase- a, for uppercase- A
echo "current hr (12hr format with lower am): ".date('g a').'<br/>';
echo "current hr (12hr format with upper AM): ".date('g A').'<br/>';
echo "current hr (24hr format with lower am): ".date('G a').'<br/>';
echo "current hr (24hr format with upper AM): ".date('G A').'<br/>';

//to see the minutes put i

echo "Current min: ".date('i')."<br/>";

//we can set timezone as our needs
//It is best you set the time zone at first then use as u want, just following the upper codes
$my_time_zone = date_default_timezone_set('Asia/Dhaka');
echo "My timezone now: ".$my_time_zone."<br/>";
$date = date('d/m/Y h:i:s a', time());
echo "My zone time:".$date;