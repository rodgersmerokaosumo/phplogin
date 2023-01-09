<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width", initial-scale =1.0>
        <title>Login Page</title>
        <link rel="stylesheet" type ="text/css" href="style.css">
    </header>
    <body>
        <div id = "form">
            <h1>Login</h1>
            <form name="form" action = "login.php" onsubmit="return isvalid()" method="post">
                <label>username: </label>
                <input type="text" id="user" name="user"/></br></br>
                <label>Password :</label>
                <input type="password" id="pass" name="pass"/></br></br>
                <input type="submit" id="btn" value="Login" name="submit"/>
                    
            </form>
            <p class="link"><a href="registration.php">Not a user, Register.</a></p>
        

        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;

                if (user.length=="" && pass.length==""){
                    alert("Username and Password Fields are Empty");
                    return false;
                }
                else{
                    if (user.length==""){
                    alert("Username is Empty");
                    return false;
                }
                if (pass.length==""){
                    alert("Password is Empty");
                    return false;
                }
                }
            }
        </script>
    </body>
</html>