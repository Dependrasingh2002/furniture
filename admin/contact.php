
<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
?>
<?php
     $query="select * from contact";
     $result=mysqli_query($cont,$query);
      if(mysqli_num_rows($result)){
?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
    <section>
    <div class="contaniner">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <h3>Contact List</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>Contact ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Response</th>
                            <th>Timestamp</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                   <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tbody>
                            <tr>  
                            <td><?php echo $row['cid']?></td>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['message']?></td>
                            <td><?php echo $row['response']?></td>
                            <td><?php echo $row['timestamp']?></td>
                            <td>
                                <a href="<?php echo"contactupdate.php?id=$row[cid]";?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo"conatctdelete.php?id=$row[cid]";?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            </tr>
                            </tbody>
                            <?php
                        }
                    ?>
                </table>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</scetion>
    </div>
</div>