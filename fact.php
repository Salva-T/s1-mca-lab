<html>
    <head>
        <title>Factorial</title>
    </head>
<body>
    <form method="post" action=""> 
        Enter a number :
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if($_POST){
        $fact = 1;
        $number = $_POST['number'];
        echo"Factorial of $number: <br><br>";
        for ($i = 1;$i <= $number; $i++){
            $fact = $fact * $i;
        }
        echo $fact . "<br>";        
    }
?>
