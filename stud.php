<html>
    <head>
        <title></title>
    </head>
<body>
    <form method="POST" action=""> 
        Roll no:
        <input type="number" name="rollno" ><br>
        Name :
        <input type="text" name="name" ><br>
        Mark :
        <input type="number" name="mark" ><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
$conn = mysqli_connect('localhost','root','','student');

if($_POST){
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mark = $_POST['mark'];
    $query = "INSERT INTO stud VALUES ('$rollno','$name','$mark')";
    $p = mysqli_query($conn,$query);
    if($p)
    {
        echo"<script>alert('successfully inserted a row')</script>";
    }
    else
    {
        echo "<script> alert('Failed to insert row')</script>";
        echo "</br>Failed to insert!";
    }
}
 
?>

