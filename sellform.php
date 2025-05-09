<?php include("navbar.php") ?>
<header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">فرم خرید محصول</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">لطفا با دقت اطلاعات را وارد کنید</p>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    <form action="login_action.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="نام محصول" name="username1" required><br>
                                <label for="username1">نام محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="قیمت محصول" name="passw" required><br>
                                <label for="passw">قیمت محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="نام و نام خانوادگی" name="passw" required><br>
                                <label for="passw"> نام و نام خانوادگی</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="(متر مربع)ابعاد" name="passw" required><br>
                                <label for="passw">ابعاد متر مربع</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="شماره تماس " name="passw" required><br>
                                <label for="passw"> شماره تماس</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="ادرس محل زندگی" name="passw" required><br>
                                <label for="passw"> ادرس محل زندگی</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder=" ایمیل" name="passw" required><br>
                                <label for="passw"> ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit">ثبت شفارش</button>
                        </form>
                        <?php include("footer.php") ?>