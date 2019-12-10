<?php
/*--------------------------------------
    Exception Handling- try..........catch
    :write your codes in try and handles your exception in catch
--------------------------------------------------------------------*/
//lets see how can we handle a db conncetion exception
try{
    $con = @mysql_connect('localhost','root','ff');
    if($con){

    }else{
        throw new exception('could not connet',420);
    }
}
catch(Exception $e){
    echo $e.getCode(). ' : An error occurred : '.$e->getMessage();
}

/*---------------------------------------------------
    var_dump()
    : one of the most debugging function of php
    : it expresses all the info of a variable
----------------------------------------------------*/
$an_array = array('X', 2.25, 'Y', 5.20);
echo '<pre>';
var_dump($an_array);

/*-----------------------------------------------
    set_error_handler()
    :to build own customize error handler
------------------------------------------------*/
//creating a customized error handler
//1st parameter is the error no, 2nd is the info of the error, 3rd is the file where error is being occured
//4th is the line which created the error
//last one is to see variable scope and information
function handleAnyError($err_no, $err_string, $err_file, $err_line, $context){
    echo '<h3/>'.$err_no . ': '. $err_string. '</h3>';
    echo '<p>'.$err_line. ' : '.$err_file.'</p>';
    print_r($context);
}

//now passing the function
set_error_handler('handleAnyError');

//set a condition and check the handler
/*here a condition is setted to check the varible is numeric or not, 
if not then show the error based on error handler*/
if(!is_numeric($an_array)){
    trigger_error('Need a number for processed further');
}

/*while we will deploy our project in a shared host environment, we cant access php.ini file. But there is
a option to access. ini_set() function is used to access the config file. We can change as we need. */
/* ini_set()- it takes 2 parameters; 1st one is the variable name or the option of config file such as 
display_errors or mysql.connect_timeout. 2nd one is the value.*/
echo(ini_set('mysql.connect_timeout', 150));

/*---------------------------------
    tricks: to stop execution in your code in right place just put return statement
------------------------------------*/
$x = array(1, 2, 3, "Php");
print_r($x);
return;

//the following code will not execute
$y= 24;
echo $y;