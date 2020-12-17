<?php
    //Get values passe from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //mysql injection prevention
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);


    //conecting to the server and database selection
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    //database querry
    $result = mysql_query("select * from users where username = '$username' and password ='$password'")
                or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login Success! Welcome".$row['username'];

    }   else {
            echo "Failed to login!";
    }         
?>