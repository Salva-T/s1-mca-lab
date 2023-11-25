<html>
    <head>
        <title>Signup Page</title>
    </head>
<body>
    <form method="post" action=" ">
    Name :
    <input type="text" name="username"><br>
    Age :
    <input type="number" name="age"><br>
    Email :
    <input type="email" name="email"><br>
    Phone no :
    <input type="number" name="phoneno"><br>
    Password :
    <input type="password" name="password"><br>
    Re-type Password :
    <input type="password" name="password"><br> 
    <input type="submit" name="Register" value="Register">
    <input type="submit" name="login" value="Reset">
</form>
</body>
</html>

<?php
include 'conn.php';
if($_POST)
{
    $name = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email']; 
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];

    $sq = "INSERT into login values('$name','$age','$email','$phoneno','$password')";
    $p = mysqli_query($conn,$sq);
    if($p)
    {
        echo"<script>alert('successfully inserted');</script>";
    }
}
?>
