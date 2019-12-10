<?php
/*=================================================
    More functions on file operations in Php
==================================================*/

/*-----------------------------
 file_exists()
 :to check a file exist or not
 : you have to put a path in parenthesis
 -----------------------------*/

 //lets check this php file does exist or not
 if(file_exists('C:\xampp\htdocs\phpAdvance\file')){
     echo "The file is exist";
 }else{
     echo "nope, the file does not exist";
 }
echo "<br/>";

/*---------------------------
    file_get_contents()
    :if we want to see the contents of a remote or local file then this functions is used
    :we must put the path to the file
------------------------------------*/
$get_file_content = file_get_contents('C:\xampp\htdocs\phpAdvance\file\demo.txt');
echo "**file_get_contents() example";
echo "<br/>";
echo $get_file_content; //this output the contents of demo.txt file
echo "<br/>";

/*----------------------------------------
 readfile()
 :to see only data of a file then we can use it
 ------------------------------------------------*/
 echo "**readfile() example";
 echo "<br/>";
 echo readfile('C:\xampp\htdocs\phpAdvance\file\demo.txt');
 echo "<br/>";

 /*---------------------------------------------
    feof()
    :to check whether the the pointer of file is at last or not
    : 1 parameter- the path or name of file 
    : if true then it gets at the last point
    : timeout error while the file is too long
----------------------------------------------------*/
$handle = fopen('demo.txt','r');
echo "**feof() example";
echo "<br/>";
//to get at the last point while loop is used
while(!feof($handle)){
    echo fgets($handle);
}
echo "<br/>";
/*---------------------------------
    file()
    : to read a file as an array.
    : it takes one line as one index or element
    : parameter- the path of the file or name
-------------------------------------------------*/
//lest see an example
$files_to_array = file('demo.txt');
echo "**Files to Array Example";
echo '<pre>';
print_r($files_to_array);