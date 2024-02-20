<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $id=$_POST['id'];  
 $categoryname=$_POST['categoryname'];
 $query="update category set categoryname='$categoryname' where id='$id'";
 $result=mysqli_query($cont,$query);
 if($result)
 {
    echo "<script>
    alert('your category updated sucessfully');
    window.location.href='category.php';
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
    $select="select * from category where id=$id";
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
                <h3 class="text-center">Update category</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                   <div class="mb-3">
                    <label for="categoryname">categoryName</label>
                    <input type="text" class="form-control" value="<?= $row['categoryname'];?>" name="categoryname">
                    <input type="hidden" value="<?= $row['id'];?>"name="id">
                   </div>
                   <input type="submit" class="btn-btn-primary" name="addcategory" value="addcategory">
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