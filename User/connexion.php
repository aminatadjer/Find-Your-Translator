<?php
class db
{
    function base()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "webproject";

// Create connection
        $conn = "(".$servername.",".$username.",".$password.",".$db.")";

// Check connection

        return $conn;
    }
}
?>