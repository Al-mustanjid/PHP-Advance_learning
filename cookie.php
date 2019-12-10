<?php
//In particular, to detect a user cookie is used most. 

/*How to set a cookie
setcookie(name, value, expiration)
:name- set the name of cookie as you want. we can use this cookie for futher operations.
:value: it stores the value
:expiration- the period of cookie when it exits or stops */
//it must set before tag

//now we will create a cookie to check last visit of a user. It will also help to check how many time the user has visited the site.

//we will set time duration for 1 month 

//calculate time: second * minute * hours * days + current time
$inOnemonth = 60*60*24*30 + time();

setcookie('lastVisit',date("G:i - m/d/Y"), $inOnemonth);

//if the cookie does not expire then we can retrive the cookie following $_COOKIE variable
//now lets retrieve our cookie
if(isset($_COOKIE['lastVisit']))
$visit = $_COOKIE['lastVisit'];
else
echo "You have got some stale cookies!";

echo "Your last visit was: ".$visit;

//now delete the cookie
//delete for the last hour
setcookie('lastVisit',"", time()-3600);

