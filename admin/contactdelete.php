<?php
include '../dbconnect/config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="delete from contact where cid=$id";
    $result=mysqli_query($cont,$query);
    if($result)
    {
        echo "<script>
        alert('your data is deleted');
        window.location.href='contact.php';
        </script>";
    }
    else{
        echo "something went wrong".mysqli_error($cont);
    }
}
else{
    header('Location:contact.php');
}
?>