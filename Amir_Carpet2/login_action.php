
<?php
include("tag_a.php");
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
        header("Location: header3.php?msg=success");
        $_SESSION["login"] = true;
    } else {
        header("Location: header3.php?msg=error");
    }
    exit();
?>

<?php
include("footer2.html");
?>
