<?php
include 'layout/header.php';
// include 'dashboard.php';
include  '../dbconnect/config.php';
$pnameerr=$imageerr=$caterr=$branderr=$pricerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_FILES['image']['name']){

        if(isset($_POST['updateproduct'])){
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'productimage/'.$imagename);
        }   
        else{
            $imagename=$_POST['oldimg'];
        }
           $id=$_POST['pid'];
            $productname = $_POST['productname'];
            $category = $_POST['category'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $description = $_POST['description'];
             $query="update product set productname='$productname',category='$category',brand='$brand',price='$brand',description='$description' where pid='$id'";
             
           $result=mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product updeted successfully');
                    window.location.href='product.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($cont);
            }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from product where pid=$id";
    $result=mysqli_query($cont,$select);
    // print_r($result);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result);
?>
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">Addproduct</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="text" value="<?= $row['productname'];?>" class="form-control" name="productname" placeholder="Enter your product name">
                        <input type="hidden" value="<?=$row['pid']?>" name="pid">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" value="<?=$row['image']?>" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <small style="color:red"><?php echo $imageerr;?></small> -->
                        <input type="hidden" value="<?= $row['image']?>" name="oldimg">
                        <img src="productimage/<?php $row['image'];?>" height="50" width="50"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Category:</label>
                        <!-- <input type="text" class="form-control" name="category" placeholder="Enter your category name"> -->
                        <select name="category" id="">
                            <option>--select--</option>
                            <option <?php echo $row['category']=='Wooden'?'selected':'' ?> value="Wooden">Wooden</option>
                            <option <?php echo $row['category']=='Fiber'?'selected':'' ?> value="Fiber">Fiber</option>
                            <option <?php echo $row['category']=='plastic'?'selected':'' ?> value="plastic">plastic</option>
                        </select>
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Brand:</label>
                        <!-- <input type="text" class="form-control" name="brand" placeholder="Enter your brand name"> -->
                        <select name="brand" id="">
                            <option>--select--</option>
                            <option <?php echo $row['brand']=='sleepwell'?'selected':'' ?> value="sleepwell">sleepwell</option>
                            <option <?php echo $row['brand']=='fiber'?'selected':'' ?> value="fiber">fiber</option>
                            <option <?php echo $row['brand']=='plastic'?'selected':'' ?> value="plastic">plastic</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">TotalPrice:</label>
                        <input type="text" value="<?=$row['price']?>" class="form-control" name="price" placeholder="Enter your productprice name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?=$row['description']?>" class="form-control" name="description" placeholder="Enter your description name">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?=$row['create_add']?>" class="form-control" name="created_at" placeholder="Enter your description name">
                    </div> -->
                    <input type="submit" class="btn btn-primary" name="updateproduct" value="Updateproduct">
                </form>
                <?php
                  }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>