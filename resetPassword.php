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