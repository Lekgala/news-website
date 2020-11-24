<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--link css file-->
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

    <?php
    //config file 
    include("config.php");
    //variable assignment and input data sanitizing
    if (isset($_POST['login'])) {
        $user_name = santizeString($_POST['user']);
        $user_pass = santizeString($_POST['pass']);
        //check if username exists 
        $check_user = "select * from users WHERE username='$user_name'AND password='$user_pass'";

        $run = mysqli_query($conn, $check_user);

        if (mysqli_num_rows($run)) {
            echo "<script>alert('Successfully logged in');window.open('view.php','_self')</script>";

            $_SESSION['name'] = $user_name; //here session is used and value of $user_name store in $_SESSION.  

        } else {
            echo "<script>alert('Username or password is incorrect!')</script>";
        }
    }
    ?>
    <!--login form-->
    <div class="container">

        <form action="login.php" method="POST">
            <p align="center">Contact Management System || Admin login</p>
            
               
                <input type="text" name="user" name="user" placeholder="Username" />
            
                <input type="password" name="pass" name="pass" placeholder="Password" />
            
                <input type="submit" class="login-btn" name="login" value="Login" />
         
        </form>
    </div>
</body>
</html>