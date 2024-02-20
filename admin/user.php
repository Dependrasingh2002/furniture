<?php
include "layout/header.php";
include "dashboard.php";
include "../dbconnect/config.php";
?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
        <table class="table">
            <div class="container">
                <h1 class="text-center">User list</h1>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $query ='Select * from user';
                $result = mysqli_query($cont,$query);
                if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){
                        ?>
                    <tr>
                        <td scope="row"><?= $row['id'];?></td>
                        <td><?= $row['firstname']?></td>
                        <td><?= $row['lastname']?></td>
                        <td><?= $row['email']?></td>
                        <td><?= $row['phone']?></td>
                        <td><?= $row['role']?></td>
                        <td><?= $row['timestamp']?></td>
                        <td><a href="userupdate.php?id=<?= $row['id'];?>" class="btn  bg-green"><i
                                    class="fa-solid fa-user-pen"></i></a>
                            <a href="userdelete.php?id=<?= $row['id'];?>" class="btn btn-red"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                }
            ?>
                </tbody>
            </div>
    </div>
</div>
</table>

<?php include "layout/footer.php"?>