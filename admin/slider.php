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
        <h1 class="text-center">Slider list</h1>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Slider Name</th>
                <th scope="col">Image</th>
                <th scope="col">Content</th>
                <th scope="col">Title</th>
                <th scope="col">Button</th>
                <th scope="col">Timestamp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query ='Select * from slider';
                $result = mysqli_query($cont,$query);
                if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_assoc($result)){
                        ?>
            <tr>
                <td scope="row"><?= $row['id'];?></td>
                <td><?= $row['slidername']?></td>
                <td><img src="sliderimage/<?= $row['image']?>" height="50px" width="50px"/></td>
                <td><?= $row['content']?></td>
                <td><?= $row['title']?></td>
                <td><?= $row['button']?></td>
                <td><?= $row['timestamp']?></td>
                <td><a href="sliderupdate.php?id=<?= $row['id'];?>" class="btn  bg-green"><i
                            class="fa-solid fa-user-pen"></i></a>
                    <a href="sliderdelete.php?id=<?= $row['id'];?>" class="btn btn-red"><i
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