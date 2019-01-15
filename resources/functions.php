<?php

function redirect($location) {
    header("Location: $location");
}

function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}

function confirm($result) {
    global $connection;
    if(!$result) {
        echo("QUERY FAILED " . mysqli_error($connection));
    }
}

function login_user() {
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    $query = query("SELECT * FROM users WHERE username = '{$username}' AND '{$password}'");
    confirm($query);

    if(mysqli_num_rows($query) == 0) {
        echo("Successful");
        redirect("login.php");
    }
    }
}

?>