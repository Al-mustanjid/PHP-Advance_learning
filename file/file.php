<?php
//there are many functions to handle file in php.

/*===========================================================================================================================================
--------------------------------------
            Modes
-------------------------------------
There are several modes to deal with a file in php
r -> only read the file. The pointer stands at the begining of the file.
r+ -> open for both read and write. The pointer stands at the begining of the file.

w -> open for write. If file does not exist then create a new file.
w+ -> simillar with r+ but the difference is it creates a new file if it does not find file. The pointer stands at the begining of the file.

a -> open for only write. Creating a new file if filde does not exist. The pointer stands at the last of the file.
a+ -> open for both read and write. Creating a new file if filde does not exist. The pointer stands at the last of the file.

x -> open for write and the pointer stands at the begining of the file. If the file does not exist then warn and create a new file
x+ -> create a new file and open for both read and write.
=================================================================================================================================================*/

/*============================================================================================================================
    file open- fopen()
    to open a file or a url this func is used.
    It has 2 parameters: 1. filename: the file you want to open, 2. mode: in which mode you want to handle. (see the modes)
================================================================================================================================*/

$handle = fopen('demo.txt','w'); //write mode
//now lets write something in this txt file
/*to do this we use fwrite() function, it has 2 parameters, 1.handle: the file you want to open. we have already opened the file using $handle
2. string: you written parts. */

$content = "This is a test string writing to /'demo.txt/' file\n";
//write $content to the file
if(fwrite($handle,$content) == FALSE){  //notice that fwrite has two parameters, one is opening the file and the second one is writing
    echo 'cant write to the file';
    return;
}else{
    echo "Written, done!".'<br/>';
}                                   //if true then check your txt file, you will find the text.

//lets put some more lines
//to add more line please add \n at last
$content2 = "This is another string";
fwrite($handle, $content2);

//lets close the file which handler has been pointed
//to do this we use fclose() function
if(fclose($handle) == FALSE){
    echo "Something is wrong";
    return;
}else{
    echo "The file has closed";
}
echo '<br/>';
//now, lets see the first line of our file as output
$handle2 = fopen('demo.txt','r');
echo fgets($handle2);

