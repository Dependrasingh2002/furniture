<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include  '../dbconnect/config.php';
 $branderr="";
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    if(isset($_POST['addbrand']))
    {
        if(empty($_POST['brandname'])|| $_POST['brandname']=='')
        {
            $branderr="Please enter your brandname";
        }
        else{
            $brandname=$_POST['brandname'];
            $sql="insert into brand(brandname) values('$brandname')";
            $result=mysqli_query($cont,$sql);
            if($result)
            {
                echo "<script>
                 alert('your brand added successfully');
                 window.location.href='brand.php';
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
                <h3 class="text-center">Add Brand</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                   <div class="mb-3">
                    <label for="brandname">BrandName</label>
                    <input type="text" class="form-control" name="brandname">
                    <small><?php echo $branderr;?></small>
                   </div>
                   <input type="submit" class="btn-btn-primary" name="addbrand" value="addbrand">
                </form>
            </div>
        </div>
    </div>
</section>
    </div>
 </div>