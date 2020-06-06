<?php
    require("databasesConnect.php");
    $recoveryEmail=$_POST['recovery-email'];

    $sql = "SELECT * FROM users WHERE email='$recoveryEmail'";
    $result=$conn->query($sql);

    //Check if entered Email exists
    if ($result->num_rows >= 1) {
        //Send mail using mail()[This function returns false on failure]
        
        $subject = 'Link to reset password';
        $body="<html>
            <head>
                <title>Verify Email and Reset Password</title>
            </head>
            <body>
                <p>Click on the link below to reset your password</p>
                <a href = 'resetPassword.php'>Reset your password</a>
            </body>
        </html>";

        //To check if the mail had been sent successfully
        $sendMail = mail($recoveryEmail, $subject, $body);
        if($sendMail){
            echo "<body style='background-color: lightgray;'><fieldset style='background-color: white; width: 30%; margin: 3% auto '>";
            echo "A Password Recovery Link has been sent to your email. Please login into your provided email account click the link to reset your password";
            echo "</fieldset></body>";
        }
        else
            echo "<body style='background-color: lightgray; display: none;'>
            <p style='font-size: 20px;'>Error: Password Reset Failed</p><br>
            <a style='font-size: 20px;' href='recoveryEmail.html'>Try Again</a>
        </body>";
    }
    else {
        echo "<body style='background-color: lightgray; display: none;'>
            <p style='font-size: 20px;'>Error: Email does not exist</p><br>
            <a style='font-size: 20px;' href='recoveryEmail.html'>Try Again</a>
        </body>";
    }

?>