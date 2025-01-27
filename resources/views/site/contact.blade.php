@include ('master/header')

<section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Contact Us</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href={{Route('home')}}>Home</a></li>
          <li><span>Contact Us</span></li>
        </ul>
      </div>
    </section>
    <!-- Contact us Page-->
    <section class="core-projects touch">
      <div class="sectpad touch_bg">
        <div class="container clearfix">
        <h6> <span>General Inquireies Phone: +8809 638009255</span></h6>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">House B/113, Mosque Road, New DOHS Mohakhali, Dhaka-1206, Bangladesh</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href={{Route('contact')}}><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="mailto:karim@greengenesisbd.com">karim@greengenesisbd.com</a>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href={{Route('contact')}}><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">+880 1933 302535<br> +880 1716 434 153</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 input_form">
              <form id="contactForm" action="http://galaxyanalytics.net/demos/industrial/contact_process.php" method="post">
                <input id="name" type="text" name="name" placeholder="First" class="form-control">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
                <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control"></textarea>
                <div class="row m0">
                  <button type="submit" class="btn btn-default submit">Submit Now <i class="fa fa-angle-double-right"></i></button>
                </div>
              </form>
              <div id="success">
                <p>Your message sent successfully.</p>
              </div>
              <div id="error">
                <p>Something is wrong. Message cant be sent!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.3784025658994!2d90.395635!3d23.782045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76a3e033945%3A0x10148203129d8607!2sGreen%20Genesis%20Engineering%20Limited!5e0!3m2!1sen!2sbd!4v1737959390127!5m2!1sen!2sbd" width="1600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
      </div>
      </div>
    </section>

    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href={{Route('contact')}} class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>










@include ('master/footer')