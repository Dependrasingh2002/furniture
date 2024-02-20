<?php include "layout/header.php"; 
 include "../dbconnect/config.php";
 $emailerr=$passworderr=$failer="";
 if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['login'])){
        if(empty($_POST['email'])|| $_POST['email']==''){
            $emailerr="please enter your email";
        }
        elseif(empty($_POST['password'])|| $_POST['password']==''){
            $passworderr="please enter your password";
        }
        else{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query ="Select * from user where email ='$email' && password='$password'";
            $result =mysqli_query($cont,$query);
            if(mysqli_num_rows($result)==1){
                $data =mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['name'] =$data['firstname'].''.$data['lastname'];
                $_SESSION['email'] =$data['email'];
                $_SESSION['phone'] =$data['phone'];
                $_SESSION['role'] =$data['role'];
                $_SESSION['id'] =$data['id'];
                if($data['role']=='admin'){
                    header('location:admin/dashboard.php');
                }
                else{
                    header('location:dashboard.php');
                }
            }else{
                $failer="Your are entering wrong email and password";
            }
        }
    }
 }
?>
<section class="sign-form "> 
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 ">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="row ">
                        <div class="col-sm-12 ">
                            <h2 class="text-black h3 mb-3 text-decoration-underline">Log in</h2>
                            <p><?= $failer; ?></p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <lable class="text-black" for="email">Email</lable>
                            <input type="text" class="form-control" id="fname" name="email">
                            <small style="color:red;"><?php echo $emailerr;?></small>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-12 ">
                            <lable class="text-black" for="password">Password</lable>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class=" row ">
                        <div class="col-sm-6" onclick="myCaptcha()">
                            <p class="form-control text-center pt-1 fs-3 "><s>A S F 3 4 2</s></p>
                        </div>
                        <div class="col-sm-6">
                             <input type="text" class="form-control t" id="cpt" name="cpt" placeholder="enter captcha code">
                        </div>
                        <i></i>
                    </div>
                    
                    <div class=" row ">
                        <div class="col-sm-12">
                            <input type="submit" class="btn product-btn" value=" login " name="login" onclick="chechCaptcha()"></input>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</section>
<?php include "layout/footer.php";?>