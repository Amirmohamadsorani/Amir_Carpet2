<?php
include("tag_a.php")
?>
<?php
$id=$_GET["id"];
$fileurl="";
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"DELETE FROM `mahsol` WHERE `id`=$id;");
mysqli_close($a);

?>
<?php
$row=mysqli_fetch_array($b);
if($row)
{
    $fileurl=$row["imageurl"];
}

$delete=unlink($fileurl);
if($delete==true)
{
   $a=mysqli_connect("localhost","root","","amir");
   $b=mysqli_query($a,"DELETE FROM `mahsol` WHERE `id`=$id;");
   mysqli_close($a);
}
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

