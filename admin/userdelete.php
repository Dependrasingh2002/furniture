<?php

include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query="Delete from user where id=$id";
    $result = mysqli_query($cont,$query);
    if($result){
        echo "<script>
        alert('Your data deleted');
        window.location.href='user.php';
        </script>";
    }
    else{
        echo "Something went wrong".mysqli_error($cont);
    }
}
else{
    header('location:user.php');
}