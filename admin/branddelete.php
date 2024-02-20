<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query="Delete from brand where id=$id";
    $result = mysqli_query($cont,$query);
    if($result){
        echo "<script>
        alert('Your deleted brand successfully');
        window.location.href='brand.php';
        </script>";
    }
    else{
        echo "Something went wrong".mysqli_error($cont);
    }
}
else{
    header('location:brand.php');
}