<?php
include("tag_a.php")
?>
<?php
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$id=$_POST["id"];
$massege="";
$flagsaveok=true;
$image=$_FILES["image"]["name"];
$imageurl="picture/".$image;

if(file_exists($imageurl)){
   $flagsaveok=false;
   $massege.="فایل مشابه در سرور وجود دارد";

}
$size=($_FILES["image"]["size"]);
if($size>10*1024*1024){
    $flagsaveok=false;
    $massege.="حجم فایل بیشتر از 50 مگابایت است";
}
$extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extension!="jpg")
{
    $flagsaveok=false;
    $massege.="نوع فایل باید jpg باشد";
}
$updload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

if($upload==false)
{
    $flagsaveok=false;
    $massege+="در اپلود فایل مشکلی پیش امده است";
}

if($flagsaveok)
{
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"INSERT INTO `mahsol`(`name`, `ghymat`, `id`, `imageurl`) VALUES ('$name','$ghymat','$id','$imageurl');");
mysqli_close($a);
?>
<?php
if($b===true)
{
 ?>
 <script>
    location.replace("menu_mahsol.php");
 </script>   
 <?php
}else
echo("خطا");
}
?>
<?php
include("footer2.html");
?>



