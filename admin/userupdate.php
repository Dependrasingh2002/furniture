<?php
include "../dbconnect/config.php";
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $phone=$_POST['num'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $password=$_POST['password'];
    $query = "update user set firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',role='$role' where id =$id";
    $result = mysqli_query($cont,$query);
    // print_r($result);
    if($result){
        echo "<script>
        alert('Your data update successfully');
        window.location.href='user.php';
        </script>";
    }
    else{
        echo mysqli_error($result);
    }
}

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $select ="Select * from user where id=$id";
    $selectresult = mysqli_query($cont,$select);
    if(mysqli_num_rows($selectresult)>0){
        $row = mysqli_fetch_assoc($selectresult);
        
        ?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12 col-sm-12"></div>
            <div class="col-lg-10 contact-info col-md-12 col-sm-12">
                <h1 style="text-decoration:underline;">Sign Up</h1>
                <form class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="col-lg-6 col-md-6">
                        <lable for="fname">First name</lable>
                        <input type="text" value="<?= $row['id'];?>" name="id" />
                        <input type="text" value="<?= $row['firstname']?>" name="fname" id="fname"
                            class="form-control news-field" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <lable for="lname">Last name</lable>
                        <input type="text" value="<?= $row['lastname']?>" name="lname" id="lname"
                            class="form-control news-field" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <lable for="num">Phone</lable>
                        <input type="text" value="<?= $row['phone']?>" name="num" id="num"
                            class="form-control news-field" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <lable for="email">Email</lable>
                        <input type="text" value="<?= $row['email']?>" name="email" id="email"
                            class="form-control news-field" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <lable for="password">Password</lable>
                        <input type="text" value="<?= $row['password']?>" name="password" id="password"
                            class="form-control news-field" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <lable for="msg">Role</lable>
                        <select name="role">
                            <option <?php echo $row['role']=='user' ? 'selected' : '';?> value="user">User</option>
                            <option <?php echo $row['role']=='admin' ? 'selected' : '';?> value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <input type="submit" name="update"
                            class="btn mb-3 px-4 rounded-pill text-white news-field bg-dark" value="update"
                            style="background:#3b5d50;" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-1 col-md-12 col-sm-12"></div>
    </div>
</section>
<?php
    }
}else{
    header('Location:user.php');
}