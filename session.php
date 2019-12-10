<?php
    //session is used to store user information while user browse the site. There are many purposes of using session.
    //In Php, session starts with session_start()
    //It must set before html tag, otherwise it will not work

    session_start();
?>

<html>
<head>
<title>Session Learn</title>
</head>
<body>
<h3>Session Learning</h3>
</body>
</html>

<?php
    //store a session in variable
    //it is best to use session variable to store and retrive
    $_SESSION['views'] = 1;
    echo 'page views: '.$_SESSION['views'];

    //now lets create a new samll page counter that will count the visit time of a user
    if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
    else
    $_SESSION['views'] = 1;

    echo "Views: ".$_SESSION['views'];

    //we can destroy session using unset(), session_destroy()

    //unset() only deletes a specific session variable
    unset($_SESSION['views']);

    //to completely remove or destroy session_destroy() is used
    session_destroy();

    //session_destroy() reset the session thats why we will lost the data that has been stored during previous session
?>