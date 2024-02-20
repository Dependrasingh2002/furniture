<?php
$cont=mysqli_connect("localhost","root","","furniture");
if($cont){
  // echo "connection succesefully" .mysqli_error($cont);
}
else{
    echo "not connect"; 
}
