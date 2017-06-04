<?php

    //mysql credentials
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "test";

    //mysql database authentication
    mysql_connect($host, $user, $pass);
    mysql_select_db($dbname);

    if (isset($_POST['']))  {

        $username = $_POST['username'];
        $password = $_POST['password']; 

        $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $res = mysql_query($sql);

        if (mysql_num_rows($res) == 1){
            echo "Login successful";
            exit();
        } else {
            echo "wrong shit, sorry lmao";
            exit();
        }
    }
?>

<!doctype html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  

        <meta name="description" content="Login form">
        <meta name="author" content="aldlg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id="login" method="post" action="login.php">
            Username: <input type="text" name="username"/><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Log in"/>
        </form>
    </body>
</html>