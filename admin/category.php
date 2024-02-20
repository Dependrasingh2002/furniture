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
        <h1 class="text-center">Category list</h1>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query ='Select * from category';
                $result = mysqli_query($cont,$query);
                if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){
                        ?>
            <tr>
                <td scope="row"><?= $row['id'];?></td>
                <td><?= $row['categoryname']?></td>
                <td><?= $row['timestamp']?></td>
                <td><a href="categoryupdate.php?id=<?= $row['id'];?>" class="btn  bg-green"><i
                            class="fa-solid fa-user-pen"></i></a>
                    <a href="categorydelete.php?id=<?= $row['id'];?>" class="btn btn-red"><i
                            class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </div>
</table>
    </div>
</div>
<?php include "layout/footer.php"?>