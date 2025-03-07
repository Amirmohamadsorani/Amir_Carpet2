
<?php
include("tag_a.php")
?>
<?php
?>
<div class="row">
<div class="container px-4 px-lg-5">
<div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center"></br>
                    </br>
                    </br>
                        <h2 class='alert alert-success'  role='alert'>لیست محصولات</h2>
                        <hr class="divider" />
                        <?php
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
?>
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">ویرایش</th>
      <th scope="col">حذف کردن</th>
      <th scope="col">اسم </th>
      <th scope="col">قیمت </th>
    </tr>
  </thead>

            <?php
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>
                  <tbody>
                    
    <tr>
      <th scope="row"><button class="btn btn-outline-secondary"><a class="lk" href="cityedit.php?id=<?php echo($row["id"]); ?>" id="n2">edit</a></button></th>
      <td><button class="btn btn-outline-secondary"><a class="lk" href="citydelete.php?id=<?php echo($row["id"]); ?>" id="n1">delete</a></button></td>
      <td><span> <?php echo($row["name"]);  ?> </span></td>
      <td><span>  <?php echo($row["ghymat"]);  ?> </span></td>
      <td>
   <td> <img src="<?php echo($row["imageurl"]); ?>" class="figure-img img-fluid rounded" class="rounded mx-auto d-block" alt="..."></td>
   </td>

    </tr>
            <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
                    </tbody>
                    </table>
    </div>
</div>
</div>
                </div>
            </div>
</div>
<?php
include("footer2.html");
?>
