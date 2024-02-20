<?php
include 'layout/header.php';
// include 'dashboard.php';
include  '../dbconnect/config.php';
// $pnameerr=$imageerr=$caterr=$branderr=$pricerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_FILES['image']['name']){

        if(isset($_POST['updateslider'])){
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'sliderimage/'.$imagename);
        }   
        else{
            $imagename=$_POST['oldimg'];
        }
           $id=$_POST['id'];
            $slidername = $_POST['slidername'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $button = $_POST['button'];
            $query="update slider set slidername='$slidername',content='$content',title='$title' where id='$id'";
             
           $result=mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your slider updeted successfully');
                    window.location.href='slider.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($cont);
            }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from slider where id=$id";
    $result=mysqli_query($cont,$select);
    // print_r($result);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result);
?>
<div class="addslider">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">update slider</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">SliderName:</label>
                        <input type="text" value="<?= $row['slidername'];?>" class="form-control" name="slidername" placeholder="Enter your product name">
                        <input type="hidden" value="<?=$row['id']?>" name="id">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Image:</label>
                        <input type="file" value="<?=$row['image']?>" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <small style="color:red"><?php echo $imageerr;?></small> -->
                        <input type="hidden" value="<?= $row['image']?>" name="oldimg">
                        <img src="productimage/<?php $row['image'];?>" height="50" width="50"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">content:</label>
                        <input type="text" value="<?=$row['content']?>" class="form-control" name="content" placeholder="Enter your productprice name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">title:</label>
                        <input type="text" value="<?=$row['title']?>" class="form-control" name="title" placeholder="Enter your description name">
                    </div>
                    <input type="submit" class="btn btn-primary" name="updateslider" value="Updateslider">
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