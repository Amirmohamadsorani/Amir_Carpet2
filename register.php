<?php
include("tag_a.html");
?> 
<form action="action_register.php" method="post">
  <div class="container">
    <label for="username"><b class="label_text">نام کاربری *</b></label><br>
    <input class="re" type="text" placeholder="وارد کردن نام کابری" name="username" required> <br>

    <label for="email"><b class="label_text">ایمیل *</b></label><br>
    <input class="re" type="email" placeholder="وارد کردن ایمیل" name="email" required><br>

    <label for="passw"><b class="label_text">رمز عبور *</b></label><br>
    <input class="re" type="password" placeholder="وارد کردن رمز عبور" name="passw" required><br>

    <label for="repassw"><b class="label_text">تکرار رمز عبور *</b></label><br>
    <input class="re" type="password" placeholder="تکرار رمز عبور" name="repassw" required><br>

    <button  class="button" type="submit">ورود</button>
  </div>

</form>
<?php
include("footer2.html");
?>