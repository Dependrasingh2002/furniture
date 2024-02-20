<?php
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query=" Delete from product where pid=$id";
    $result = mysqli_query($cont,$query);
    if($result){
        echo "<script>
        alert('product deleted successfully');
        window.location.href='product.php';
        </script>";
    }
    else{
        echo"Something went wrong".mysqli_error($cont);
    }
}else{
    header('location.product.php');
}