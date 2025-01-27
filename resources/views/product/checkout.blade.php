@include ('master/header')


<section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Checkout Page</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index-2.html">Home</a></li>
          <li><span>Checkout Page</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section id="checkout-content" class="sec-padding">
      <div class="container">
        <div class="clearfix">
          <div class="col-lg-12 return-customer">
            <p>Returning customer? <a href="#">Click here to login</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left-checkout">
            <div class="section_header color">
              <h2>BELLING DETAILS</h2>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label>First Name <span>*</span></label>
                <input type="text" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label>Last Name <span>*</span></label>
                <input type="text" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <label>Company Name</label>
                <input type="text" placeholder="Company Name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <label>Address <span>*</span></label>
                <input type="text" placeholder="Street address">
                <input type="text" placeholder="Apartment, Suit unit etc (optional)">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <label>Town / City <span>*</span></label>
                <input type="text" placeholder="Town / City">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label>State / Country <span>*</span></label>
                <div class="select-box">
                  <select name="selectMenu" class="select-menu">
                    <option value="default">Select An Option</option>
                    <option value="1">Select An Option</option>
                    <option value="2">Select An Option</option>
                    <option value="3">Select An Option</option>
                    <option value="4">Select An Option</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <label>Postcode / Zip <span>*</span></label>
                <input type="text" placeholder="Postcode / Zip">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label>Email Address <span>*</span></label>
                <input type="text" placeholder="Email Address">
              </div>
              <div class="col-lg-6">
                <label>Phone <span>*</span></label>
                <input type="text" placeholder="Phone">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 create-account">
                <input type="checkbox"><span><b>Create an account ?</b></span>
              </div>
            </div>
            <div class="section-title2 ship-to-different">
              <input type="checkbox">
              <div class="section_header color m0 p0">
                <h2>SHIP TO DIFFERENT ADDRESS</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <label>Order Notes</label>
                <textarea placeholder="Note about your order. e.g. special note for delivery"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 right-checkout">
            <div class="row">
              <div class="section_header color">
                <h2>YOUR ORDER</h2>
              </div>
              <div class="col-lg-12 order-box">
                <ul>
                  <li>PRODUCT <span>TOTAL</span></li>
                  <li>Electric Hummber X 1 <span>$65.00</span></li>
                  <li>SUBTOTAL <span class="bold">$65.00</span></li>
                  <li>Shipping and Handling <span>Free Shipping</span></li>
                  <li class="total">TOTAL <span class="bold">$65</span></li>
                  <li>
                    <input type="radio"> Direct Bank Payment
                    <div class="note">
                      <div class="i fa fa-caret-up"></div>                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                    </div>
                  </li>
                  <li>
                    <input type="radio"> Check Payment
                  </li>
                  <li>
                    <input type="radio"> PayPal <img src="images/paypal.png" alt=""><a href="#"><span>What is PayPal?</span></a>
                  </li>
                  <li class="place-order-button clearfix"><a href="#" class="thm-btn"> place order </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href="contact.html" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>









@include ('master/footer')