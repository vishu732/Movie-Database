<?php
include 'connection.php';
include 'authentication.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <body>
    <div class="loginbox">
      <img src="avatar.png" class="avatar">
      <h1> Login</h1>
      <form action="login.php" method="post">
        <p>Username</p>
        <input type="text" name="user" id="user" placeholder="Username">
        <p>Password</p>
        <input type="password" name="pass" id="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">

        <a href="#">Lost Your Password</a><br>
        <a href="register.php">Don't have an Account?</a>
</form>
</div>
</head>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 
