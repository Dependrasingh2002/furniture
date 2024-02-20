 <?php include "layout/header.php"; ?>
 <!-------------------------------------------------------------------- cart slider strat -->
 <section class="cart-slider">
     <div class="container">
         <div class="row">
             <h1>Cart</h1>
         </div>
     </div>
 </section>
 <!-- ------------------------------------------------------------------cart slider end -->
 <section class="product-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-sm-12 " method="post">
                 <div class="table-start">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th class="pro-image">Image</th>
                                 <th class="pro-product">Product</th>
                                 <th class="pro-price">Price</th>
                                 <th class="pro-quantity">Quantity</th>
                                 <th class="pro-total">Total</th>
                                 <th class="pro-remove">Remove</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <img src="images/product-1.png" alt="" class="img-fluid">
                                 </td>
                                 <td>
                                     <h2 class="h5 text-black">Product-1</h2>
                                 </td>
                                 <td>$49.00</td>
                                 <td>
                                     <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                         style="max-width:120px;">
                                         <div class="input-group-prepend">
                                             <button class="btn btn-outline-black decrease" type="button">-</button>
                                         </div>
                                         <input type="text" class="form-control text-center quantity-amount" value="1"
                                             placeholder aria-lable="Example text with button addon"
                                             aria-describedby="button-addon1">
                                         <div class="input-group-append">
                                             <button class="btn btn-outline-black increase" type="button">+</button>
                                         </div>
                                     </div>
                                 </td>
                                 <td>$49.00</td>
                                 <td>
                                     <a href="#" class="btn btn-black btn-sm">X</a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <img src="images/product-1.png" alt="" class="img-fluid">
                                 </td>
                                 <td>
                                     <h2 class="h5 text-black">Product-2</h2>
                                 </td>
                                 <td>$49.00</td>
                                 <td>
                                     <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                         style="max-width:120px;">
                                         <div class="input-group-prepend">
                                             <button class="btn btn-outline-black decrease" type="button">-</button>
                                         </div>
                                         <input type="text" class="form-control text-center quantity-amount" value="1"
                                             placeholder aria-lable="Example text with button addon"
                                             aria-describedby="button-addon1">
                                         <div class="input-group-append">
                                             <button class="btn btn-outline-black increase" type="button">+</button>
                                         </div>
                                     </div>
                                 </td>
                                 <td>$49.00</td>
                                 <td>
                                     <a href="#" class="btn btn-black btn-sm">X</a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="row mb-5 ">
                     <div class="col-sm-6">
                         <button class="product-btn" type="submit">Update Cart</button>
                     </div>
                     <div class="col-sm-6">
                         <button class="product-btn" type="submit">Continue Shoping</button>
                     </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <lable class="text-black h4" for="coupon">Coupon</lable>
                        <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="coupon code" class="form-control py-3" id="coupon">
                    </div>
                    <div class="col-sm-4">
                        <button class="product-btn fs-5" type="submit">Apply Coupon</button>
                    </div>
                 </div>
             </div>
             <div class="col-sm-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart total</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="text-black">Sub Total</span>
                            </div>
                            <div class="col-sm-6">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-sm-6 text-right">
                                <strong class="text-black">$249.00</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-12">
                                <button class="product-btn fs-5" type="submit"><a href="chackout.php">Proceed To Chackout</a></button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ------------------------------------------------------------------- -->
 <?php include "layout/footer.php"; ?>