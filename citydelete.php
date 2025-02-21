<?php
include("tag_a.php")
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"DELETE FROM `mahsol` WHERE `id`=$id;");
mysqli_close($a);
?>
<?php

if($b===true)
{
    
 ?>
 
    <script>
    location.replace("menu_mahsol.php");
 </script>   
  
 <?php

}
?>
<?php
include("footer2.html");
?>