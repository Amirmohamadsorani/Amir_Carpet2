
<?php
include("tag_a.html");
?>

<?php
    $username=$_POST["username"];
    $password=$_POST["passw"];
    $c=mysqli_connect("localhost","root","","amir");
    $result=mysqli_query($c," SELECT * FROM `carpet` WHERE 
    `username` = '$username' AND `password` = '$password';");
    $row=mysqli_fetch_array($result);
    mysqli_close($c);
    if ($row) {
        echo("ورود موفق");
    } else {
        echo("ورود ناموفق");
    }
?>

<?php
include("footer2.html");
?>
