
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
                        <h2 class='alert alert-success' role='alert'>لیست محصولات</h2>
                        <hr class="divider" />

<div class="row">
    <div class="col">
        <select class="sel">
            <?php
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>
                <option class="sel">
                        <?php echo($row["name"]);?>
                </option>
                <option class="sel">
                        <?php echo($row["ghymat"]);?>
                </option>
                <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
        </select>
    </div>
</div>
</div>
                </div>
            </div>
</div>
<?php
include("footer2.html");
?>
