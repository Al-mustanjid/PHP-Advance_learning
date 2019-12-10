<?php
//we have already known how to deal with files. Now lets explore about directory in which actually our files are exist.

/*-------------------------------------
    opendir()
    : to open a new directory
    : must provide a path where the directory will be opened
-----------------------------------------------------------------*/
$handle = opendir('C:\xampp\htdocs\phpAdvance\file');

/*----------------------------------
    scandir()
    : it crates an array of all files and directories of the path directory you provide
-----------------------------------------------------*/
echo '<pre>';
print_r(scandir('uploads'));

/*------------------------------------
    closedir()
    : to close a directory that was opened
    : must provide the path where the directory was opened
---------------------------------------------*/
closedir($handle); //just passed the var in which the directory was opened
