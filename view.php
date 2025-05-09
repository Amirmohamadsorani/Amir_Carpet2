
<?php
include("header4.php");
?>
<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
    $c=mysqli_connect("localhost","root","","site");
    mysqli_query($c,"INSERT INTO `view` (`name`, `email`, `phone`, `message`) VALUES
    ('$name','$email','$phone','$message');");
    mysqli_close($c);
?>
<?php
include("footer.php"); 
?>