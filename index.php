<?php
    $con = new mysqli('127.0.0.1', "root", 'passwordgit add ', 'mydb');
    $message = $con->query("SELECT message FROM mytable")->fetch_object()->message;
    $con->close();
    echo "$message <br/>";
    echo "This is my first PHP project. Basic database connection test run successful.";
    phpinfo();
?>