<?php include("navbar.php") ?>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">ساخت حساب کابری</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">لطفا اطلاعات را با دقت وارد کنید</p>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <form action="action_register.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام کاربری" name="username" required><br>
                                <label for="username">نام کاربری</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام" name="name" required><br>
                                <label for="name">نام کامل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" placeholder="وارد کردن ایمیل" name="email" required><br>
                                <label for="email">ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A email is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن رمز عبور" name="passw" required><br>
                                <label for="passw">رمز عبور</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit">ساخت حساب کاربری</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>


<?php
include("footer.php"); 
?>
