<?php include "layout/header.php";
include "dashboard.php";
include "../dbconnect/config.php";
$pnameerr=$cateerr=$branderr=$priceerr=$imageerr='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['addproduct'])){
        print_r($_POST['product_name']);
        if(empty($_POST['product_name'])|| $_POST['product_name']==''){
            $pnameerr="please enter your product name";
        }
        elseif(empty($_POST['category'])|| $_POST['category']==''){
            $cateerr="please enter your category name";
        }
        else if(empty($_POST['brand'])|| $_POST['brand']==''){
            $branderr="please enter your brand";
        }
        else if(empty($_POST['price'])|| $_POST['price']==''){
            $priceerr="please enter your product price";
        }

        else if(empty($_FILES['image']['name']) || $_FILES['image']['name']==''){
            $imageerr="* add your product image";
        }
        else{
          //  print_r($_FILES);
           $imagename=$_FILES['image']['name'];
           $tempname=$_FILES['image']['tmp_name'];
           move_uploaded_file($tempname,'productimage/'.$imagename);
            $productname=$_POST['product_name'];
            $category=$_POST['category'];
            $brand=$_POST['brand'];
            $price=$_POST['price'];
            $desciption=$_POST['discrip'];
            $query ="INSERT INTO product(productname,category,brand,price,image,description)
             values('$productname','$category','$brand','$price','$desciption','product')";
            $result =mysqli_query($cont,$query);
            if($result){
                echo "<script>
                alert('create accout is a successfully');
                window.location.href='product.php';
                </script>";
            }
        }

    }
    }

?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
    <section class="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2>Add Product</h2>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                    <div class="p-2 p-sm-3 bg-white">
                        <div class="row p-2">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="product_name"
                                placeholder="Enter your Product name">
                        </div>
                        <div class="row p-2">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" name="price" id="price"
                                placeholder="Enter your Product Price">
                        </div>
                        <div class="row p-2">

                        <label for="category">Category</label>
                            <select name="category" id="1" class="form-control">
                                <option>--select--</option>
                                <option value="wood">Wood</option>
                                <option value="plastic">Plastic</option>
                                <option value="fiber">Fiber</option>
                            </select>
                        </div>
                        <div class="row p-2">
                            <label for="brand">Brand</label>
                            <select name="brand" id="1" class="form-control">
                                <option>--select--</option>
                                <option value="wood">Wood</option>
                                <option value="plastic">Plastic</option>
                                <option value="fiber">Fiber</option>
                            </select>
                        </div>
                        <div class="row p-2">
                            <label for="discrip">Discription</label>
                            <input type="text" class="form-control" name="discrip"id="discrip"
                                placeholder="Enter your Product Price">
                        </div>
                        <div class="row p-2">
                            <label for="product-image">Upload Product Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                placeholder="Enter your Product Price">
                        </div>
                        <input type="submit" class="btn-btn-primary" name="addproduct" value="addproduct">
                    </div>
            </div>
            </form>

        </div>
    </div>
    </div>
</section>
    </div>
</div>
<?php include "layout/footer.php";?>