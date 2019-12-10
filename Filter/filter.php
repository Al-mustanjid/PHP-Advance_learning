<?php
/* We can clean our data by filter options in Php. There are two ways to filter or clean data
    1.Data Validation: To validate or check the data in its form or not
    2.Data Sanitization: To remove unwanted noise in data. */

    /*to validate or sanitize we can use the function
        ----------------------------
        filter_var()
        :1st parameter: the data you want to validate/filter
        :2nd parameter: what kind of filter do you need
        :3rd parameter: it is optional and its your self options
        ----------------------------
    */

    $email='arifgmail.com';
    $email_2 = 'arif@gmail.com';
    $email_3 = 'arif\2@gmail.com';
    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL)); //output: bool(false) as it is not mail
    echo '<br/>';
    var_dump(filter_var($email_2,FILTER_VALIDATE_EMAIL)); //output: string.... as it is a mail
    echo '<br/>';
    var_dump(filter_var($email_3, FILTER_SANITIZE_EMAIL)); //it sanitizes and escape the \
    echo '<br/>';

    /*------------------------------------------------
        Above we have seen how to validate or sanitize an email. To do this work php has several 
        ==============================    
            validation flags
        ===============================
    ------------------------------------------------------------*/

    /*------------------------------
        FILTER_VALIDATE_URL
        : to validate an url
    -------------------------------*/
    var_dump(filter_var('https://www.urionlinejudge.com.br/judge/en/login',FILTER_VALIDATE_URL)); //output: true
    echo '<br/>';
    var_dump(filter_var('abc.com',FILTER_VALIDATE_URL)); //output: flase
    echo '<br/>';

    /*------------------------------
        FILTER_VALIDATE_INT
        : to validate or check the data is int or not
    -------------------------------*/
    var_dump(filter_var('It is not an int',FILTER_VALIDATE_INT)); //output: false
    echo '<br/>';
    var_dump(filter_var(123,FILTER_VALIDATE_INT)); //output: int(123) , as true
    echo '<br/>';

    /*------------------------------
        FILTER_VALIDATE_FLOAT
        : to validate or check the data is float or not
    -------------------------------*/
    var_dump(filter_var('It is not a float',FILTER_VALIDATE_FLOAT)); //output: false
    echo '<br/>';
    var_dump(filter_var(123,FILTER_VALIDATE_FLOAT)); //output: float(123) , it takes as float
    echo '<br/>';
    var_dump(filter_var(123.5,FILTER_VALIDATE_FLOAT));
    echo '<br/>';

    /*------------------------------
        FILTER_VALIDATE_IP
        : to validate or check the IP address
    -------------------------------*/
    var_dump(filter_var('45.248.149.',FILTER_VALIDATE_IP)); //output: false as it is not valid
    echo '<br/>';
    var_dump(filter_var('45.248.149.1',FILTER_VALIDATE_IP)); //output: true
    echo '<br/>';

    /*------------------------------------------------
        Above we have seen how to validate or sanitize an email. To do this work php has several 
        ==============================    
            Sanitization flags
        ===============================
    ------------------------------------------------------------*/

    /*------------------------------
        FILTER_SANITIZE_URL
        : to remove or escape characters in url except the follwing characters
        $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    -------------------------------*/
    var_dump(filter_var('https://www.w3schoo��ls.co�m',FILTER_SANITIZE_URL));
    echo '<br/>';
    
    /*------------------------------
        FILTER_SANITIZE_EMAIL
        : to remove or escape unexpected or illegal characters in url except the follwing characters
        !#$%&'*+-/=?^_`{|}~@.[]
    -------------------------------*/
    //we have already did this task at the begining

    /*------------------------------
        FILTER_SANITIZE_STRING
        : remove tags and sepcial characters from a string

        More on santize string
        ------------------------
        FILTER_FLAG_NO_ENCODE_QUOTES - Do not encode quotes
        FILTER_FLAG_STRIP_LOW - Remove characters with ASCII value < 32
        FILTER_FLAG_STRIP_HIGH - Remove characters with ASCII value > 127
        FILTER_FLAG_ENCODE_LOW - Encode characters with ASCII value < 32
        FILTER_FLAG_ENCODE_HIGH - Encode characters with ASCII value > 127
        FILTER_FLAG_ENCODE_AMP - Encode the "&" character to &amp;
    -------------------------------*/

    $a_string_with_tag = '<h1> This is a string with tag</h1>';
    var_dump(filter_var($a_string_with_tag,FILTER_SANITIZE_STRING)); //output: the html tag is removed
    echo '<br/>';

    $a_string = '<h1>Hello WorldÆØÅ!';

    //lets remove all HTML tags and all characters with ASCII value > 127, from a string
    //we have to also add another flag called FILTER_FLAG_STRIP_HIGH
    var_dump(filter_var($a_string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)); //output: 'Hello world'