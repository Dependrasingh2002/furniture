<?php
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query=" Delete from slider where id=$id";
    $result = mysqli_query($cont,$query);
    if($result){
        echo "<script>
        alert('slider deleted successfully');
        window.location.href='slider.php';
        </script>";
    }
    else{
        echo"Something went wrong".mysqli_error($cont);
    }
}else{
    header('location.slider.php');
}