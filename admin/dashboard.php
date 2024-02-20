<?php 
include "layout/header.php";
include "../dbconnect/config.php";

?>
    <div id="sidebar">
        <div id="header">
            <h2>Admin Panel</h2>
        </div>
        <a href="#">Dashboard</a>
        <a href="productadd.php">AddProducts</a>
        <a href="product.php">productList</a>
        <a href="order.php">Orders</a>
        <a href="user.php">Userlist</a>
        <a href="categoryadd.php">AddCategory</a>
        <a href="category.php">Category</a>
        <a href="contact.php">Contact</a>
        <a href="brand.php">Brand</a>
        <!-- Add more menu items as needed -->
    </div>

    <div class="main-content">
        <h2>Dashboard</h2>
        <!-- Main content goes here -->
    </div>

<?php include "layout/footer.php"; ?>