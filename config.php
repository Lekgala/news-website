<?php 
//login to mysql and access the database
$hostname = "localhost";
$username = "root";
$password = "password";
$db = "news";
//connect to the databse
$conn = mysqli_connect($hostname, $username, $password,$db);
if (mysqli_connect_errno()) die ("Fital Error");
?>
<?php 
//function to sanitize input data
    function santizeString($var)
    {
        if (get_magic_quotes_gpc())
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;

    }
    ?>