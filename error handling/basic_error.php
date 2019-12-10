<?php
//In php, mainly 16 errors are shown in runtime environment.
/*it is best to set error_reporting as error_reporting= E_All in php.ini config 
to see all code errors and best code output in development platform*/

/*-----------------------------------------------------
    die()
    :it's not a function, its language construct
    :it is same as exit()
    :it shows a messeage while a error is occurred and stops execution at that moment
    :dont use at production development, only use at development mode
-----------------------------------------------------------------------------------------*/
$filename = 'C:\xampp\htdocs\phpAdvance\error handling';
$handle = fopen($filename,'r') or die("Unable to open file or file does not exist");

/*---------------------------------------------
    error suppression operator - @
    :to hide a error it is used most
------------------------------------------------*/
@file('C:\xampp\htdocs\phpAdvance\error handling\r.txt');