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

?>