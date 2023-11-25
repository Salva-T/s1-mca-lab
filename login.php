<html>
    <head>
        <title>Login Page</title>
    </head>
<body>
    <form method="post" action=" ">
    Username :
    <input type="text" name="username"><br>
    Password :
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
    <input type="submit" name="reset" value="Reset">
</form>
</body>
</html>


<?php
include 'conn.php';
if($_POST){
    if(isset($_POST['username']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $s = "SELECT * from login where username = '$username' and password = '$password';";
        $q = mysqli_query($conn,$s);
        if(mysqli_num_rows($q)>0)
        {
            echo"<br> Login success";
            $row = mysqli_fetch_array($q);
            echo "<br>";
            echo "Username :" . $row[0] . "<br>";
            echo "Password :" . $row[1] . "<br>";
        }
        else
        {
            echo"Login failed";
        }  
    }
    else
    {
        echo "username not received";
    }

}
else
{
    echo "<br>no data received";
}
?>