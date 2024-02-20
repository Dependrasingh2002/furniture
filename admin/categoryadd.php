<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include  '../dbconnect/config.php';
 $categoryerr="";
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    if(isset($_POST['addcategory']))
    {
        if(empty($_POST['categoryname'])|| $_POST['categoryname']=='')
        {
            $categoryerr="Please enter your categoryname";
        }
        else{
            $categoryname=$_POST['categoryname'];
            $sql="insert into category(categoryname) values('$categoryname')";
            $result=mysqli_query($cont,$sql);
            if($result)
            {
                echo "<script>
                 alert('your category added successfully');
                 window.location.href='category.php';
                </script>";
            }
            else{
                echo "something went wrong".mysqli_error($cont);
            }
        }
    }
 } 
 ?>
 <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">Add category</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                   <div class="mb-3">
                    <label for="categoryname">categoryName</label>
                    <input type="text" class="form-control" name="categoryname">
                    <small><?php echo $categoryerr;?></small>
                   </div>
                   <input type="submit" class="btn-btn-primary" name="addcategory" value="addcategory">
                </form>
            </div>
        </div>
    </div>
</section>
    </div>
 </div>