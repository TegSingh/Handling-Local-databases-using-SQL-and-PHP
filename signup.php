<?php
    require("databasesConnect.php");

    //Note that the index of the POST array is the name of the input not the ID
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $userName = $_POST['username'];
    $email = $_POST['email-register'];
    $telephone = $_POST['phone'];
    $dob = $_POST['dob'];
    $pwd = $_POST['password-register-new'];
    $usernum = 0;

    $sql2 = "SELECT * FROM users WHERE username='$userName'";
    $result = $conn->query($sql2); 
    if($result->num_rows > 0){
        echo "Error: USERNAME ALREADY EXISTS<br>";
        echo "<a href='index.html'>Register with a different Username</a><br>";
    } else {
        $sql = "INSERT INTO users(firstName, lastName, username, email, telephone, dob, pwd) VALUES ('$firstName', '$lastName', '$userName', '$email', '$telephone', '$dob', '$pwd')";
    }
    
    if($conn->query($sql)===TRUE){

        $sql1 = "SELECT * FROM users";
        $result = $conn->query($sql1);
    
        if(!$conn->query($sql1))
            header("index.html");

        echo "<h1>WELCOME! YOU ARE REGSITERED</h1>";
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $usernum = $usernum + 1; 
                if ($row["username"] === $userName) {
                    echo "<table style='background: white; border: solid 1pt black; padding: 2px; margin: 10px 10px 10px 10px; margin-collapse: collapse;'>";
                    echo "<tr><th>User Number</th><td>".$usernum."</td></tr>";
                    echo "<tr><th>Name </th><td>".$row["firstName"]." ".$row["lastName"]."</td></tr>";
                    echo "<tr><th>Username</th><td>".$row["username"]."</td></tr>";
                    echo "<tr><th>E-mail</th><td>".$row["email"]."</td></tr>";
                    echo "<tr><th>Phone</th><td>".$row["telephone"]."</td></tr>";
                    echo "<tr><th>Date of birth</th><td>".$row["dob"]."</td></tr>";
                    echo "</table>";
                    echo "<button style='border: solid 1pt black; margin: 10px 110px; padding: 5px' align='center'>Log-Out</button>";
                }
            }
        }
    }
    else
        echo "Erro: ".$conn->error;   
    
    $conn->close();
?>