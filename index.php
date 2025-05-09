<?php include("navbar.php") ?>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100" >
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"> ساخت کابینت های آشپزخانه</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"> طراحی و ساخت کابینت های آشپزخانه طبق سلیقه شما</p>
                        <a class="btn btn-primary btn-xl" href="#about">دیدن تصاویر بیشتر</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0"> معرفی انواع MDF</h2>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        include("connect.php");
$b=mysqli_query($a,"SELECT * FROM `product`");
mysqli_close($a);
?>
  <?php
  $row=mysqli_fetch_array($b);
  while($row)
  {
      ?>
      <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/mdf2.webp" title="Project Name">
                            <img class="img-fluid" src="assets/img/mdf2.webp" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo($row["name"]);?></div>
                                <div class="project-name"> <?php echo($row["explane"]);?> 
                        </a>
                    </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
         $row=mysqli_fetch_array($b); 
  }
  ?>
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                    <a class="btn btn-primary btn-xl" href="mahsol.php">سفارش محصول مورد نظر</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">نظرات خود را با ما به اشتراک بگذارید</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">انتقادات و پیشنهادهای ارزشمند خود را با ما به اشتراک بگذارید</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="view.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام کاربری" name="name" required><br>
                                <label for="name">نام </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام" name="phone" required><br>
                                <label for="phone">شماره تلفن</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A phone is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" placeholder="وارد کردن ایمیل" name="email" required><br>
                                <label for="email">ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A email is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن رمز عبور" name="message" required><br>
                                <label for="message">نظر</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A message is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit"> ثبت نظر</button>
                            <script>
                            </script>
                        </form>
                    </div>
                </div>
        </section>
        <footer class="bg-dark text-white py-4" id="fo">
            <div class="container text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 mb-3">
                        <i class="bi bi-phone fs-3 mb-2"></i>
                        <div class="fw-bold">09368523904</div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="mb-3">
                    <a href="https://instagram.com" class="text-white mx-2" target="_blank">
                        <i class="bi bi-instagram fs-3"></i>
                    </a>
                    <a href="https://t.me" class="text-white mx-2" target="_blank">
                        <i class="bi bi-telegram fs-3"></i>
                    </a>
                    <a href="https://wa.me" class="text-white mx-2" target="_blank">
                        <i class="bi bi-whatsapp fs-3"></i>
                    </a>
                    <a href="https://linkedin.com" class="text-white mx-2" target="_blank">
                        <i class="bi bi-linkedin fs-3"></i>
                    </a>
                </div>
                <div class="small text-center">
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> - Hesam Foroghy
                </div>
            </div>
        </footer>
    </body>
</html>
