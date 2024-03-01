  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Tulip Lash N Brow</h3>
              <p>
                Located In: Norwest Marketown, <br>
                4 Century Cct, Baulkham Hills <br>
                NSW 2153<br><br>
                <strong>Phone:</strong><?php echo $phone; ?><br>
                <strong>Email:</strong><?php echo $email; ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Facial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lashes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Threading</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Henna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Eye Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Makekup</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">For Men</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Waxing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#other-treatments">Other Treatments</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tulip Lash N Brow</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Website by <a target="_blank" href="https://sjideas.com/">SJCODES</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--Font Awesome Kit-->
  <script src="https://kit.fontawesome.com/c7aad1ddf6.js" crossorigin="anonymous"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
  ></script>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
  ></script>

  <!--slider JS-->
  <script>
    const slider = document.getElementById('before-after-slider');
    const before = document.getElementById('before-image');
    const beforeImage = before.getElementsByTagName('img')[0];
    const resizer = document.getElementById('resizer');

    let active = false;

    //Sort overflow out for Overlay Image
    document.addEventListener("DOMContentLoaded", function() {
      let width = slider.offsetWidth;
      console.log(width);
      beforeImage.style.width = width + 'px';
    });

    //Adjust width of image on resize 
    window.addEventListener('resize', function() {
      let width = slider.offsetWidth;
      console.log(width);
      beforeImage.style.width = width + 'px';
    })

    resizer.addEventListener('mousedown',function(){
      active = true;
     resizer.classList.add('resize');
    
    });

    document.body.addEventListener('mouseup',function(){
      active = false;
     resizer.classList.remove('resize');
    });

    document.body.addEventListener('mouseleave', function() {
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('mousemove',function(e){
      if (!active) return;
      let x = e.pageX;
      x -= slider.getBoundingClientRect().left;
      slideIt(x);
      pauseEvent(e);
    });

    resizer.addEventListener('touchstart',function(){
      active = true;
      resizer.classList.add('resize');
    });

    document.body.addEventListener('touchend',function(){
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('touchcancel',function(){
      active = false;
      resizer.classList.remove('resize');
    });

    //calculation for dragging on touch devices
    document.body.addEventListener('touchmove',function(e){
      if (!active) return;
      let x;

      let i;
      for (i=0; i < e.changedTouches.length; i++) {
      x = e.changedTouches[i].pageX; 
      }

      x -= slider.getBoundingClientRect().left;
      slideIt(x);
      pauseEvent(e);
    });

    function slideIt(x){
        let transform = Math.max(0,(Math.min(x,slider.offsetWidth)));
        before.style.width = transform+"px";
        resizer.style.left = transform-0+"px";
    }

    //stop divs being selected.
    function pauseEvent(e){
        if(e.stopPropagation) e.stopPropagation();
        if(e.preventDefault) e.preventDefault();
        e.cancelBubble=true;
        e.returnValue=false;
        return false;
    }


  </script>

</body>

</html>