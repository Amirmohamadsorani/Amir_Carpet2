<?php
include("navbar.php")
?>

<form action="citynew2.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<p>نام محصول :</p>
    <input type="text" name="name">
       <p>قیمت محصول :</p>
    <input type="text" name="ghymat">
    <p>کد محصول :</p>
    <input type="text" name="id">
    <p> عکس محصول :</p>
    <input type="file" name="image">
    <p> توضیحات محصول :</p>
    <input type="text" name="explane">
    <input type="submit" value="اضافه کردن" class="card">
</form>

<?php
include("footer.php");
?>


