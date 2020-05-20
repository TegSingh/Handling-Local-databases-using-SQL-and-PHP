<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";

    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) 
        die("Connection Failed: ".$conn->connect_error."<br>");
    else 
        echo "<body style = 'background: grey; font-family: calibri;'><br>";

    $username1 = $_POST['username-login'];
    $pwd = $_POST['password-login'];

    $sql = "SELECT * FROM users WHERE username='$username1'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row["pwd"] === $pwd) {
        echo "<h2>LOGIN SUCCESSFUL! WELCOME ".strtoupper($row["firstName"])."</h2>";
        echo "<table style='background: white; border: solid 1pt black; padding: 2px; margin: 10px 10px 10px 10px; margin-collapse: collapse;'>";
        echo "<tr><th>Name </th><td>".$row["firstName"]." ".$row["lastName"]."</td></tr>";
        echo "<tr><th>Username</th><td>".$row["username"]."</td></tr>";
        echo "<tr><th>E-mail</th><td>".$row["email"]."</td></tr>";
        echo "<tr><th>Phone</th><td>".$row["telephone"]."</td></tr>";
        echo "<tr><th>Date of birth</th><td>".$row["dob"]."</td></tr>";
        echo "</table>";
        echo "<a href='index.html'><button style='border: solid 1pt black; margin: 10px 110px; padding: 5px' align='center'>Log-Out</button></a>0"1;
    }
    else {
        echo "<h2>WRONG PASSWORD</h2>";
        echo "<a href='index.html'>Try Again</a><br><h3>";
    }
?>[=0

































































































]