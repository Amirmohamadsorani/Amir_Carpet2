<?php
include("tag_a.php");
?>
<?php
$id=$_GET["id"];
include("connect.php");

$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b);
?>
<form action="cityedit_action.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<p>نام محصول :</p>
    <input type="text" name="name" value="<?php echo($row["name"]);?>">
       <p>قیمت محصول :</p>
    <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>">
    <p>کد محصول :</p>
    <input type="text" name="id" name="id" value="<?php echo($row["id"]);?>">
    <p> عکس محصول :</p>
    <input type="file" name="image" value="<?php echo($row["imageurl"]);?>">
    <p> توضیحات محصول :</p>
    <input type="text" name="explane" value="<?php echo($row["explane"]);?>">
    <input type="submit" value="اضافه کردن" class="card">
</form>


<?php
include("footer2.html");
?>


