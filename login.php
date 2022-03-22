<?php
    $connect=mysqli_connect("localhost","root","","test1") or die("Connection Failed");
    if(!empty($_POST['save']))
    {
        $username=$_POST['emai'];
        $password=$_POST['pass'];
        $query="select * from registration where email='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            ?>
            <script>
            location.replace("index1.html")
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
            alert('Wrong Email or Password');
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
</head>
<body>
  
    <div class="container">  
        <form class="login-email" method="POST">
            <p class="login-text">LOGIN</p>
            <div class="input-group">
                <input type="email" id="emai" name="emai" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="pass" name="pass" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input class="btn" type="submit" name="save" value="Login" >
            </div>
        </form>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register Now</a></p>

    </div>
</body>
</html>