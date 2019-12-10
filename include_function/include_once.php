<?php
//here if we notice that we have added menu file 3 times and php also added for three times.
//but we can stop that bu include_once(). It will check the file is once added or not. If added then it will restrict to add again
include_once('menu.php');
echo '1'.'<br/>';
include_once('menu.php');
echo '2'.'<br/>';
include_once('menu.php');
