
<?php
include("tag_a.html");
?>

<?php
if(isset($_POST["username"]) && !empty($_POST["username"])
 && isset($_POST["email"])  && !empty($_POST["email"])
 && isset($_POST["passw"])  && !empty($_POST["passw"])
 && isset($_POST["repassw"])  && !empty($_POST["repassw"]))
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $repassword=$_POST["repassw"];
    echo("<p>".$username."</p>");
    echo("<p>".$email."</p>");
    echo("<p >".$password."</p>");
    echo("<p>".$repassword."</p>");
}

?>

<?php
include("footer2.html");
?>


