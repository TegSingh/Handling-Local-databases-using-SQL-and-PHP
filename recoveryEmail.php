<html>
    <head>
        <title>Recovery Email</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="content-rec">    
            <form action="recoverPassword.php" method="POST" id="recovery-email-form">
                <div id="recovery-email-header">Recover Password</div>
                <label for="recovery-email">Enter Email to recieve the link to reset Password:</label>
                <input id="recovery-email" type="email" name="recovery-email" placeholder="Enter Email">
                <button id="recovery-email-submit-button" type="Submit">Submit</button>
            </form>
        </div>
    </body>
</html>