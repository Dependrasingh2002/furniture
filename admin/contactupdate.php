<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{    
    $id=$_POST['cid'];
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $response=$_POST['response'];
    $query="update contact set firstname='$firstname',lastname='$lastname', email='$email', message='$message' where cid=$id";
    $result=mysqli_query($cont,$query);
    if($result)
    {
      echo "<script>
       alert('Your data upadted sucessfully');
       window.location.href='contact.php';
      </script>";
    }
    else{
        echo "something wrong".mysqli_error($cont);
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from contact where cid=$id";
    $result=mysqli_query($cont,$select);
   if(mysqli_num_rows($result)>0)
   {
    $row=mysqli_fetch_assoc($result)
  ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
            <form id="form" class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="col-lg-6 col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control news-field" name="first_name"  id="first_name">
                       <input type="hidden" value="<?php echo $row['cid']?>" name="cid">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control news-field" name="last_name" id="last_name">
                        
                    </div>
                    <div class="col-lg-12">
                    <label for="email">Email</label>
                        <input type="email" class="form-control news-field" name="email" id="email">
                        
                    </div>
                    <div class="col-lg-12">
                        <label for="msg">Message</label>
                        <textarea name="message" id="msg" class="form-control" rows="5" style="resize:none;"></textarea>
                        
                    </div>
                    <div class="col-lg-12">
                        <label for="response">Response</label>
                        <textarea name="response" id="response" class="form-control" rows="5" style="resize:none;"></textarea>
                        
                    </div>
                     <div class="col-auto">
                        <button type="submit" name="contactin" class="btn  mb-3 px-4 rounded-pill text-white news-field bg-dark" style="background:#3b5d50;">
                        Send Message    
                    </button>
                    </div> 
                </form>
                <?php
            }
        }
        ?>
            </div>
        </div>
    </div>
</section>