<?php 
/*---------------------------------------------------------------------------
include() vs require()
-----------------------------------------------------------*/
/*Differences
    1. When you can do the work without the page or it is option optional then we should use include
        But when it must needs then require() is the option.
    2. include() executes although there is an error in your code. Just showing or warning you the error
        but require() does not execute until it is out of error. */
    
//lets see an example
include('wrongPhp.php');
//this will print
echo "<h3>include() executes whether there is error or not along with warning of error</h3>";

//lets see what require() do
require('wrongPhp.php');
//this will not print
echo "<h3>include() executes whether there is error or not along with warning of error</h3>";

//require_once is simillar with include_once