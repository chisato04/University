<?php

    $conn_username = "root";
    $conn_password = "";
    $db = "id21354822_usersdb";

    $connect = mysqli_connect("localhost", $conn_username, $conn_password, $db) or die("Unable to establish a connection");
    //localhost will also work on a web server, it means that the mysql server is on the same server as apache; in cases where they are not, you would have to use an absolute link
    //this will connect to the database that we are using

?>