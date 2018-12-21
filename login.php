<?php include('config.php') ?>
<html>
<head>
<title>Pravasan || Track'N'Go </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div class="loginbox">
    <img src="css/avatar.png" class="avatar">
        <center><h1>Login Here</h1></center><br>
        <form action="validate.php" method="post">
           <font size="2px"> <p>Username</p>
          <input type="text" name="u_name" placeholder="Enter Username" style="font-size:15px" pattern="^[a-z0-9._]{1,}$" title="Allowed Characters (a-z, A-Z, _ , 0-9)" required >
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" style="font-size:15px" pattern="^.{6,}$" title="6 Characters or more" required >
            <br><br>
            <input type="submit" name="login" value="Login">
            <br><br>
            <a href="forgotPass.php">Lost your password?</a><br>
            <a href="signUp.php">Don't have an account?</a>
        </form>
        <br/><br><br><br><br/><center><a href="index.php">Home</a>
    </div>

</body>
</head>
</html>