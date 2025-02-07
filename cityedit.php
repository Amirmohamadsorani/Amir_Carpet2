<?php
include("tag_a.html");
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b)
?>
</br>
</br>

</br>

<form action="cityedit_action.php" method="post">
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>
<?php
include("footer2.html");
?>


