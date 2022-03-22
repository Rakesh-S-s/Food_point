
<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed");
}

$name = $_POST["username"];
$email = $_POST["email"];
$date = $_POST["date"];
$password = $_POST["password"];
$cpass=$_POST["cpassword"];
if($password==$cpass){

$sql = "INSERT INTO registration (username, email,dob, password) 
VALUES ('$name', '$email', '$date','$password')";

if($conn->query($sql) === TRUE){
    ?>
    <script>
        alert('Values have been inserted');
            location.replace("login.php");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('Values did not insert');
    </script>
    <?php
}
}else{
    ?>
    <script>
        alert('Wrong password');
        location.replace("register.php");
    </script>
    <?php
}

?>
