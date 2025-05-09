<?php
include("header.php");
?>
<?php
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $a=mysqli_connect("localhost","root","","cabinet");
    mysqli_query($c,"INSERT INTO `user`(`name`, `username`, `email`, `password`) VALUES
    ('$name','$username','$email','$password');");
    mysqli_close($a);
?>
<?php
include("footer.php");
?>

