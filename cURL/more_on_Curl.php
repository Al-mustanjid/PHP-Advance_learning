<?php
//Exploring some more functions of cURL

/*==================================================================================
POST Request using cURL
We can do a post request by cURL. For this the value of CURLOPT_POST must set true 
The value of form fields are passed by CURLOPT_POSTFIELDS as an array.
The form method must  method="POST"
=====================================================================================*/
// Step-1: initialize cURL
$curl = curl_init();
$post_data = array("search"=> "php", "task"=>"search");

//step-2: set some option
curl_setopt($curl, CURLOPT_URL, 'http://localhost:8080/phpAdvance/cURL/output.php'); //initialize the page that will open
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //to see the value as string thats why set 1
curl_setopt($curl, CURLOPT_POST, 1); // to make a post request through this script, 1 is set as true
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data); //passing the feild values

//step-3: execute curl
$output = curl_exec($curl);

//close curl

curl_close($curl);

//view the output
echo $output;

//In this way we can create a post request to a website by gaining where the page is redirected through the form
//but sometimes post will not work without cookie, then we can set CURLOPT_COOKIE
curl_setopt($curl, CURLOPT_COOKIE, 'cookie1 = value1');

//sometimes post will not work without header, we can also send header using curl
curl_setopt($curl,CURLOPT_HTTPHEADER, array('Content-type: application/xml', 'Authorization: frdg'));

/*==================================================================================
    Getting HTTP data using curl
    :If we want to get some data from a secured url such as SSL certified (HTTPS) 
        then normal request creates error. 
    : curl provides some options to get over there
    : we can set "CUROPT_SSL_VERIFYPEER"
====================================================================================*/
$curl2 = curl_init();

curl_setopt($curl2, CURLOPT_URL, 'https://www.bdjobs.com/');
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, 1); //to verify ssl the value sets to 1
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, 2);
/*CURLOPT_SSL_VERIFYHOST has 3 values 
0: cn (common name), the attributes will not testify
1: testify cn atrributes
2: testify cn attributes and verifies the name of host 

As production server thats way we set 2 as it is default */

$info = curl_exec($curl2);
echo $info; // we will get the info of bdjobs as output
