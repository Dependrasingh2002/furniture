<?php include "layout/header.php";
include "dashboard.php";
include "../dbconnect/config.php";
$snameerr=$imagerr=$titleerr=$contenterr='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['addslider'])){
        print_r($_POST['slidername']);
        if(empty($_POST['slidername'])|| $_POST['slidername']==''){
            $snameerr="please enter your slider name";
        }
        elseif(empty($_POST['content'])|| $_POST['content']==''){
            $contenterr="please enter your content ";
        }
        else if(empty($_POST['title'])|| $_POST['title']==''){
            $titleerr="please enter your title";
        }
        else if(empty($_FILES['image']['name']) || $_FILES['image']['name']==''){
            $imageerr="* add your slider image";
        }
        else{
          //  print_r($_FILES);
           $imagename=$_FILES['image']['name'];
           $tmpname=$_FILES['image']['tmp_name'];
           move_uploaded_file($tmpname,'sliderimage/'.$imagename);
            $slidername=$_POST['slidername'];
            $content=$_POST['content'];
            $title=$_POST['title'];
            $button=$_POST['button'];
            $query ="INSERT INTO slider(slidername,content,title,image,button)
             values('$slidername','$content','$title','$imagename','$button')";
            $result =mysqli_query($cont,$query);
            if($result){
                echo "<script>
                alert('slider added successfully');
                window.location.href='slider.php';
                </script>";
            }
        }

    }
    }

?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
    <section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2>Add Slider</h2>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                    <div class="p-2 p-sm-3 bg-white">
                        <div class="row p-2">
                            <label for="slidername">Slider Name</label>
                            <input type="text" class="form-control" name="slidername" id="slidername"
                                placeholder="Enter your Product name">
                        </div>
                        <div class="row p-2">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                placeholder="select your image">
                        </div>
                        <div class="row p-2">
                            <label for="content">content</label>
                            <textarea type="text" class="form-control" name="content" id="content"
                                placeholder="Enter your content"></textarea>
                        </div>
                        <div class="row p-2">
                            <label for="title">title</label>
                            <input type="text" class="form-control" name="title"id="title"
                                placeholder="Enter your title">
                        </div>
                        <div class="row p-2">
                            <label for="button">button</label>
                            <input type="text" class="form-control" name="button"id="button"
                                placeholder="Enter your title">
                        </div>
                        
                        <input type="submit" class="btn-btn-primary" name="addslider" value="addslider">
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