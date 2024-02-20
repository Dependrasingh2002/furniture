<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query="Delete from category where id=$id";
    $result = mysqli_query($cont,$query);
    if($result){
        echo "<script>
        alert('Your deleted category successfully');
        window.location.href='category.php';
        </script>";
    }
    else{
        echo "Something went wrong".mysqli_error($cont);
    }
}
else{
    header('location:category.php');
}