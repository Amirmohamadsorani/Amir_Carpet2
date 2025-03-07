<?php
include("tag_a.php")
?>

<form action="citynew2.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<p>نام:</p>
    <input type="text" name="name">
       <p>قیمت:</p>
    <input type="text" name="ghymat">
    <p>کد محصول:</p>
    <input type="text" name="id">
    <p> عکس محصول :</p>
    <input type="file" name="image">
    <input type="submit" value="اضافه کردن" class="card">
</form>

<?php
include("footer2.html");
?>