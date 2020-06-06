<?php
    require("databasesConnect.php");
    require("messagePassword.php");
    
    $pwd_reset_new = $_POST['reset-password-new'];
    $pwd_reset_confirm = $_POST['reset-password-confirm'];

    $sql_reset = "UPDATE users SET pwd = '$pwd_reset_new' WHERE email = '$recoveryEmail'";    
    
    if($conn->query($sql_reset))    
        echo "<body style = 'display: none; background-color: lightgray;'>
        <fieldset style ='background-color: white; font-size: 20px;'>Password Reset Successfully<br>
        <a href='index.html'>Return to the login page</a></fieldset></body>";
    else 
        echo "<body style = 'display: none; background-color: lightgray;'>
        <fieldset style ='background-color: white; font-size: 20px;'>Password reset failed<br>
        <a href='index.html'>Return to the login page</a>
        <a href='resetPassword.php'>Try Again</a></fieldset></body>";    
?>
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <div id="content-reset"> 
            <form action="resetPassword.php" method="POST" id="password-form" name="password-form" onsubmit="return validateNewPassword()">
                    <div id="reset-password-header">Recover Password</div>
                    <input id="reset-password-new" type="password" name="reset-password-new" placeholder="Enter New Password">
                    <input id="reset-password-confirm" type="password" name="reset-password-confirm" placeholder="Confirm New Password">
                    <button id="reset-password-submit-button" type="Submit">Submit</button>
            </form>
        </div>
    </body>
</html>
