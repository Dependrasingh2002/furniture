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
        <h1 class="text-center">Product list</h1>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Despription</>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query ='Select * from product';
                $result = mysqli_query($cont,$query);
                if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){
                        ?>
            <tr>
                <td scope="row"><?= $row['pid'];?></td>
                <td><?= $row['productname']?></td>
                <td><?= $row['category']?></td>
                <td><?= $row['brand']?></td>
                <td><?= $row['price']?></td>
                <td><img src="productimage/<?= $row['image'];?>" height="50" width="50" /></td>
                <td><?= $row['description']?></td>
                <td><?= $row['create_at']?></td>
                <td><a href="productupdate.php?id=<?= $row['pid'];?>" class="btn  bg-green"><i
                            class="fa-solid fa-user-pen"></i></a>
                    <a href="productdelete.php?id=<?= $row['pid'];?>" class="btn btn-red"><i
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