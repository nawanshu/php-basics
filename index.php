<?php include("variables.php"); ?>
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
            echo "This is my first PHP project. Basic database connection test run successful. <br/>";
            echo "Concat1" . " Concat2" . " Using period<br/>";
            echo 10+20;
            $num1  = 20;
            $num2 = 30;
            if($num1 === $num2) {
                echo "Equal.";
            } elseif($num1 == 50) {
                echo "No equal to 50.";
            } else {
                echo "No equal at all.";
            }

            $arr = array(1,2,3,4,5);
            for($i=0;$i<=count($arr);$i++){
                echo $arr[$i];
            }

            function writeHello($firstname){
                echo "Hello " . $firstname;
            }
            writeHello("Nawanshu <br /> <br />");

            echo(rand(1, 10)."<br />");

            echo(date('Y'));

            $str = "Welcome to the PHP world!<br />";
            
            echo($str);

            echo(str_replace("Welcome", "Welcome Nawanshu", $str));

            echo(strtoupper("nawanshu <br />"));
            echo $site_title;
            $site_title = "Replacing main title";
            echo $site_title;
            
        ?>
        </h1>
    </center>
</body>
</html>