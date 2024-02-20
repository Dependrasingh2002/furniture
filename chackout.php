<?php include "layout/header.php";?>
<!-------------------------------------------------------------------- chechout slider strat -->
<section class="cart-slider">
     <div class="container">
         <div class="row">
             <h1>Chackout</h1>
         </div>
     </div>
 </section>
 <!-- ------------------------------------------------------------------chackout slider end -->

 <!-- ------------------------------------------------------------------chackout form start--->
<section class="checkout-part">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="border p-4 rounded text-secondary" role="alert">Returning customer? <a href="#">Click here</a> to login</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-5">
                <h2 class="text-black h3 mb-3">Billing Detail</h2>
                <div class="p-3 border bg-white">
                    <div class="form-group">
                        <lable for="c_country" class="text-black">Country
                            <span class="text-danger">*</span>
                        </lable>
                        <select id="c_country" class="form-control">
                              <option value="1">Select a country</option>    
		                      <option value="2">bangladesh</option>    
		                      <option value="3">Algeria</option>    
		                      <option value="4">Afghanistan</option>    
		                      <option value="5">Ghana</option>    
		                      <option value="6">Albania</option>    
		                      <option value="7">Bahrain</option>    
		                      <option value="8">Colombia</option>    
		                      <option value="9">Dominican Republic</option>    
                        </select>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <lable class="text-black" for="c_fname">Frist name
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_fname" name="c_fname">
                        </div>
                        <div class="col-sm-6">
                        <lable class="text-black" for="c_lname">Last name
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_lname" name="c_lname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <lable class="text-black" for="c_cname">Company name</lable>
                            <input type="text" class="form-control" id="c_cname" name="c_cname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <lable class="text-black" for="c_address">Address <span class="text-danger">*</span></lable>
                            <input type="text" class="form-control mb-4" id="c_address" name="c_address" placeholder="street address">
                            <input type="text" class="form-control" id="c_address" name="c_address" placeholder="apartment suite unit etc. (optional)">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <lable class="text-black" for="c_state">State country
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_state" name="c_state">
                        </div>
                        <div class="col-sm-6">
                        <lable class="text-black" for="c_posta">Posta / Zip
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_posta" name="c_posta">
                        </div>
                    </div>
                    <div class="row form-group mb-5">
                        <div class="col-sm-6">
                            <lable class="text-black" for="c_email">Email address
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_email" name="c_email">
                        </div>
                        <div class="col-sm-6">
                        <lable class="text-black" for="c_num">Phone
                                <span class="text-danger">*</span>
                            </lable>
                            <input type="text" class="form-control" id="c_num" name="c_num">
                        </div>
                    </div>
                    <div class="row form-group">
                           <lable for="c_create_account" class="text-black" data-bs-toggle="collapse"
                           href="#create_an_account" role="button" aria-expanded="false"
                           aria-controls="create_an_account">
                           <input type="checkbox" value="1" id="c_create_account">
                           Create an account ?
                        </lable>
                        <div class="collapse" id="create_an_account">
                            <div class="py-2 mb-4">
                                <p class="mb-3">
                                    "Create an account by entering the information below. If you are a returning custumer please 
                                    login at the top of the page."
                                </p>
                                <div class="form-group">
                                    <lable class="text-black" for="c_account_password">Account Password</lable>
                                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <lable for="c_create_account" class="text-black" data-bs-toggle="collapse"
                           href="#create_an_account" role="button" aria-expanded="false"
                           aria-controls="create_an_account">
                           <input type="checkbox" value="1" id="c_create_account">
                           Ship To A Different Address?
                        </lable>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <lable class="text-black" for="c_over">Oder notes</lable>
                            <textarea class="form-control" id="c_oder" name="c_oder" col="30" row="5" placeholder="write your notes hear...." style="height:100px;"></textarea> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-5">
                <div class="col-sm-12">
                    <h2  class="  h3 mb-3 text-black">Coupon Code</h2>
                    <div class="p-3 p-lg-5 border bg-white">
                        <lable for="c_code" class="text-black mb-3">Enter your coupon code if you have one.</lable>
                        <div class="input-group w-75 couponcode-wrap">
                            <input type="text" class="form-control me-2" id="c_code" placeholder="Coupom Code" aria-lable="Coupon code" aria-describedby="button-addon-2">
                            <div class="input-group-append">
                                <button class="btn product-btn btn-sm" type="button" id="button-addon2">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

<div class="row mt-5">
                        <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Your Order</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Top Up T-Shirt <strong>x</strong>1</td>
                                        <td>$430.00</td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt <strong>x</strong>1</td>
                                        <td>$54.00</td>
                                    </tr>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>$350.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

		                  <div class="collapse" id="collapsebank">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

		                  <div class="collapse" id="collapsecheque">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="border p-3 mb-5">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

		                  <div class="collapse" id="collapsepaypal">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <button class="btn   py-3 btn-block product-btn" onclick="window.location='thankyou.html'">Place Order</button>
		                </div>

		              </div>
		            </div>
		          </div>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
 <!-- ------------------------------------------------------------------chackout form end -->
<?php include "layout/footer.php"; ?>