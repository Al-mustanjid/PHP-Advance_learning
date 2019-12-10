<?php
// There are 8  regular expression functions in Php

/*==================================
    Preg_match()
    :it finds the match with expression
    :first takes the patter
    :pattern must put betwen '' or ""
    :there must be a word at the end of pattern
====================================*/
$line = "We are learning regular expression in Php";

if(preg_match('/\bexpression\b/i', $line)){
    /*   /\bexpression\b/i - / / - delimtere, \b - boundary that means only the word expression, 
            at last i means it can be case sensitive 
            the function will find the 'expression' word following the pattern, 
            if matches then true otherwise it is false
            */
            echo "matched!";
}else{
    echo "not matched!";
}
echo '<br/>';

/*=====================================================
    preg_match_all()
    : it is simillar with preg_match()
    : preg_match() stops while it found one match but preg_macth_all dont stop. It returns all the matches(as an array).
=======================================================*/
$html = <<<PARA
<p>Bnagladesh is a country of natural beauty</p>
<p>Please share webcoachbd inn your facebook n twitter</P>
PARA;
if(preg_match_all("@<p>@",$html,$all_match)>1){ //1st: set the patter(delimeter: @, 2nd:match item, 3rd: store all matches)
    echo "There are more than one p tag in html";
}else{
    echo "there is no tag";
}

echo '<br/>';

$para = "This is regular expression learning where we are now learning preg_match_all function";
if(preg_match_all("#[\s]#", $para, $all_match)>1){
    echo "there are more than matches";
    echo '<pre>';
    print_r($all_match);
}else{
    echo "Dont found or something is wrong";
}

/*==================================================
    preg_replace()
    :this function is used to replace a word in a string or array follwing the pattern
===================================================*/
$copy_right ="Copyright 1999"; //we will replace the year 1999
$copy_right = preg_replace("([\d]+)","2019", $copy_right); //its check if there is any number, if finds then replace it
echo $copy_right; // output:Copyright 2019
echo '<br/>';

$card = 48993.48009-155317; //suppose its a wrong card number; there will be no hypen and space
$card = preg_replace("#[\-\s.]#", '',$card);
echo $card;
echo '<br/>';

/*==============================================
    preg_replace_callback()
    : simmilar with preg_replace()
    : just put a callback where the replace argument was set in preg_replace
    : the callback ultimately calls a function which replaces the desired replacement words (as an array)
================================================*/
//first create a function to make a list of changes
function acronym($matches){
    $acronyms = array("PHP"=>"PHP Hypertext Preprocessor","WWW"=>"World Wide web");
    return $acronyms[$matches[1]];
}
$text = "now a days <acronym>PHP</acronym> is the popular language for <acronym>WWW</acronym>.";
$new_text = preg_replace_callback("/<acronym>(.*)<\/acronym>/",'acronym',$text); 
//1st: the pattern, just pass the function or callback name normally not as acronym(), next one is the replacement item
print_r($new_text);
echo '<br/>';

// this text was used in 2002
// we want to get this up to date for 2003
$text = "April fools day is 04/01/2018\n";
$text.= "Last christmas was 12/24/2017\n";
// the callback function
function next_year($matches)
{
  // as usual: $matches[0] is the complete match
  // $matches[1] the match for the first subpattern
  // enclosed in '(...)' and so on
  return $matches[1].($matches[2]+1); 
  //first match the first part(1st pattern)(day, month), then match second sub pattern and increase the year as 1 (+1)
}
echo preg_replace_callback(
            "|(\d{2}/\d{2}/)(\d{4})|", //(\d{2}/\d{2}/): 1st subpattern, (\d{4}): 2nd subpattern
            "next_year",
            $text);



