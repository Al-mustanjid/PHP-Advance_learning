<?php
//to find out error in curl function we can do error handling
//Two options to find out error; 1. error_no curl_errorno 2. error info - curl_error

$curl = curl_init();

$output = curl_exec($curl);

if($output === FALSE){
    echo "Error no: ".curl_errno($curl)." "."eRROR: ".curl_error($curl);
    //it will show output; error no: 3 , no url set 
}else{
    echo "Fine";
}
curl_close($curl);

//The operations of curl can be set in an array, there is a option for that called curl_setopt_array
$curl2 = curl_init();

$options = array(
    CURLOPT_URL => 'https://www.php.net/manual/en/book.curl.php',
    CURLOPT_RETURNTRANSFER => 1, //0 means false, 1 means true; true or false can be set
    CURLOPT_SSL_VERIFYPEER => 1,
    CURLOPT_SSL_VERIFYHOST => 2
);

//now we will pass the options into array 
curl_setopt_array($curl2, $options);

$show = curl_exec($curl2);
echo "<h3 style=text-align:center;>This Page has fetched using curl functions in PHP</h3>";
echo $show;

// how handle works or to get about all transfer information, there is a function
echo '<pre>';
echo "Transfer Infromation".'<br/>';
print_r(curl_getinfo($curl2)); //just pass the curl handler in function parameters

//to see which curl version is using we can use curl_version() function
echo "Curl Version Information".'<br/>';
print_r(curl_version());