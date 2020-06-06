<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";

    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection Failed: ".$conn->connect_error."<br>");
    }
    else {
        echo "<body style = 'background: grey; font-family: calibri;'><br>";
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if($conn->query($sql)){    
        //Checks if the table has already been created
        if ($result->num_rows === 0) {
            $sql = "CREATE TABLE users (
                id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstName VARCHAR(30) NOT NULL,
                lastName VARCHAR(30) NOT NULL,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                telephone VARCHAR(20) NOT NULL,
                dob DATE NOT NULL,
                pwd VARCHAR(20) NOT NULL
            )";
            
            if($conn->query($sql)===TRUE)
            {
                echo "<br>";
            } else {
                echo "Error: ".$conn->connect_error."<br>";
            }   
        }
    } else {
        echo "Error: ".$conn->connect_error."<br>";
        header("index.html");
    }

?>