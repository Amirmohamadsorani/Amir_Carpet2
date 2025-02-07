<?php
include("tag_a.html")
?> 
<form action="login_action.php" method="post">
  <div class="container">
    <label for="username"><b class="label_text">نام کاربری *</b></label><br>
    <input class="re" type="text" placeholder="وارد کردن نام کابری" name="username" required> <br>

    <label for="passw"><b class="label_text">رمز عبور *</b></label><br>
    <input class="re" type="password" placeholder="وارد کردن رمز عبور" name="passw" required><br>

    <button class="button2" type="submit">ورود</button>
  </div>

</form>
<?php
include("footer2.html");
?>