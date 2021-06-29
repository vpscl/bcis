<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Certificate Issuance System</title>
    <link rel="icon" type="image/x-icon" href="img/icons/north-logo.ico" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
 

    <div class="login-container">
    
        
        <div class="login-section">

        <div class="login-header">
            <div class="text">
                <h1>BARANGAY</h1>
                <h4>CERTIFICATE ISSUANCE SYSTEM</h4>
            </div>
        </div>


        <div class="login-fields">
            <!-- error -->
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <!-- action form -->
            <form action="login-function.php" method="post">

                <div class="textbox">
                    <img src="img/icons/user-24.png" alt="" />
                    <input type="text" placeholder="Username" name="uname" />
                </div>

                <div class="textbox">
                    <img src="img/icons/password-24.png" alt="" />
                    <input type="password" placeholder="Password" name="password" />
                </div>

                <button class="btn"><span>LOGIN</span></button>
            </form>
            </div>

        </div>
    </div>
</body>

</html>