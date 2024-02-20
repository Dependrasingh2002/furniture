<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $id=$_POST['id'];  
 $brandname=$_POST['brandname'];
 $query="update brand set brandname='$brandname' where id='$id'";
 $result=mysqli_query($cont,$query);
 if($result)
 {
    echo "<script>
    alert('your brand updated sucessfully');
    window.location.href='brand.php';
    </script>";
 }
 else
 {
    echo "something wrong".mysqli_error($cont);
 }
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $select="select * from brand where id=$id";
   $result=mysqli_query($cont,$select);
   if(mysqli_num_rows($result)>0)
   {
    $row=mysqli_fetch_assoc($result);
   // print_r($row);
   ?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">Update Brand</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                   <div class="mb-3">
                    <label for="brandname">BrandName</label>
                    <input type="text" class="form-control" value="<?= $row['brandname'];?>" name="brandname">
                    <input type="hidden" value="<?= $row['id'];?>"name="id">
                   </div>
                   <input type="submit" class="btn-btn-primary" name="addcategory" value="addbrand">
                </form>
                <?php
            }
        }
        ?>
            </div>
        </div>
    </div>
</section>
    </div>
</div>