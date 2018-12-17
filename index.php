<?php
    if(isset($_POST['login']))
    {
        header('Location:/homePage.php');
    }

?>
<html>
<head>
<title>Pravasan || Track'N'Go </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div class="loginbox">
    <img src="css/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="homePage.php" method="post">
            <p>Username</p>
          <input type="text" name="u_name" placeholder="Enter Username" style="font-style:italic" pattern="^[a-z0-9._]{1,}$" title="Allowed Characters (a-z, A-Z, _ )" required >
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" style="font-style:italic" pattern="^.{6,}$" title="6 Characters or more" required >
        <div>
            <center>
                <select name="user_type">
                    <option>Customer</option>
                    <option>Conductor</option>
                    <option>Depo</option>
                    <option>Administrator</option>
                </select>
            </center>
        </div>
            <br>
            <input type="submit" name="login" value="Login">
            <a href="forgotPass.php">Lost your password?</a><br>
            <a href="signUp.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>