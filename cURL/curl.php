<?php
//cURL - client url, curl is used to collect data from a url. The data can be used for further proceedings.
//to enable the cURL, extension = php_curl.dll must be uncomment in php.ini config file
//Using cURL we can also get http, https, LDAP, file etc.
//several works such as user authentication, cookie handling, file upload  we can do with cURL.

/*=======================================
    Setup cURL
    4 steps are needed to setup cURL
    1: initialize-the function curl_init() is set to initialize cURL
    2: To set different options, curl_setopt() is used
    3: to execute the desired function curl_exec() is used
    4: to close - curl_close()
===========================================*/

//lets open a webpage using curl

//step-1: setup curl
$cr_set = curl_init();

//step-2: set some option
curl_setopt($cr_set, CURLOPT_URL, 'https://al-mustanjid.github.io/mustanjid.info/index.html');
curl_setopt($cr_set,CURLOPT_HEADER,0);
//to set set_opt, 1st parameter is handler($cr_set), 2nd parameter: the name of options(CURLOPT_URL)
//3rd parameter: the value of option (the web page)

//step-3: curl execution
curl_exec($cr_set);

//curl close
curl_close($cr_set);
