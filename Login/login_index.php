<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="./login_style1.css">
</head>

<body>
    
        <form action="./login.php" method="post">
            <div class="a_login_logo_container">
                <img src="../images/logo.png" alt="logo" class="a_login_logo">
            </div>


            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>User Name</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
    
</body>

</html>