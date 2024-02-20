<?php include "layout/header.php"; 
 include "dbconnect/config.php";
 $fnameerr=$cpasserr=$emailerr=$passworderr=$phoneerr="";
 if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['signup'])){
        if(empty($_POST['fname'])|| $_POST['fname']==''){
            $fnameerr="please enter your first name";
        }
        elseif(empty($_POST['num'])|| $_POST['num']==''){
            $phoneerr="please enter your Mobile number";
        }
        else if(empty($_POST['email'])|| $_POST['email']==''){
            $emailerr="please enter your email";
        }
        else if(empty($_POST['password'])|| $_POST['password']==''){
            $passworderr="please enter your password";
        }
        else if(empty($_POST['c_password'])|| $_POST['c_password']==''){
            $cpasserr="please enter your confirm password";
        }
        else if($_POST['c_password']!=$_POST['password']){
            $cpasserr="*Your confirm password is not same as password";
        }
        else{
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $phone=$_POST['num'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query ="INSERT INTO user(firstname,lastname,phone,email,password,role) values('$firstname','$lastname','$phone','$email','$password','user')";
            $result =mysqli_query($cont,$query);
            if($result){
                echo "<script>
                alert('create accout is a successfully');
                window.location.href='login.php';
                </script>";
            }
        }

    }
 }
 ?>


<section class="sign-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <h2 class="text-black h3 mb-3 text-decoration-underline">Signup</h2>
                <div class="row form-group">
                    <div class="col-sm-6">
                        <lable class="text-black" for="fname">Frist name
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="fname" name="fname">
                        <small style="color:red;"><?php echo $fnameerr;?></small>
                    </div>
                    <div class="col-sm-6">
                        <lable class="text-black" for="lname">Last name
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6">
                        <lable class="text-black" for="num">Mo No
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="num" name="num">
                        <small style="color:red;"><?php echo $phoneerr;?></small>
                    </div>
                    <div class="col-sm-6">
                        <lable class="text-black" for="email">Email
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="email" name="email">
                        <small style="color:red;"><?php echo $emailerr;?></small>
                    </div>
                </div>
                <div class="row form-group mb-5">
                    <div class="col-sm-6">
                        <lable class="text-black" for="password">Password
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="password" name="password">
                        <small style="color:red;"><?php echo $passworderr;?></small>
                    </div>
                    <div class="col-sm-6">
                        <lable class="text-black" for="c_cpassword">Confirm password
                            <span class="text-danger">*</span>
                        </lable>
                        <input type="text" class="form-control" id="c_password" name="c_password">
                        <small style="color:red;"><?php echo $cpasserr;?></small>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn product-btn"value="sign up" name="signup" ></input>
                </div>
            </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>
<?php include "layout/footer.php";