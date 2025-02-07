
<?php
include("tag_a.html");
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
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
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>
                <div class="row">
                <div class="col">
                    <button class="btn btn-outline-secondary"><a class="lk" href="cityedit.php?id=<?php echo($row["id"]); ?>" id="n2">edit</a></button>
                    <button class="btn btn-outline-secondary"><a class="lk" href="citydelete.php?id=<?php echo($row["id"]); ?>" id="n1">delete</a></button>
                    <span>
                        <?php echo($row["name"]);  ?>
                    </span>
                    <span>
                        <?php echo($row["ghymat"]);  ?>
                    </span>
                </div>
            </div>
            <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
        
    </div>
</div>
</div>
                </div>
            </div>
</div>
<?php
include("footer2.html");
?>
