<html>
    <head>
        <title>This is my PHP website</title>
    </head>
<body>
    <center>
        <h1>
        <?php
            //Setting up database
            $con = new mysqli('127.0.0.1', "root", 'password', 'mydb');

            /* Fetching data from database */
            $message = $con->query("SELECT message FROM mytable")->fetch_object()->message;
            $con->close();
            echo "$message <br/>";
            echo "This is my first PHP project. Basic database connection test run successful.";
        ?>
        </h1>
    </center>
</body>
</html>