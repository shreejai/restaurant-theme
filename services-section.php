    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our Specialities</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <!-- <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> -->
              <li data-filter=".filter-facials">Facial</li>
              <li data-filter=".filter-lashes">Lashes</li>
              <li data-filter=".filter-threading">Threading</li>
              <li data-filter=".filter-henna">Henna</li>
              <li data-filter=".filter-eye-treatment">Eye Treatment</li>
              <li data-filter=".filter-makeup">Makeup</li>
              <li data-filter=".filter-men">For Men</li>
              <li data-filter=".filter-waxing">Waxing</li>
              <li data-filter=".filter-other">Other Treatments</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <?php include("./services-facial.php"); ?>
          <?php include("./services-lashes.php"); ?>
          <?php include("./services-threading.php"); ?>
          <?php include("./services-henna.php"); ?>
          <?php include("./services-eye-treatment.php"); ?>
          <?php include("./services-makeup.php"); ?>
          <?php include("./services-men.php"); ?>
          <?php include("./services-waxing.php"); ?>
          <?php include("./services-other.php"); ?>


        </div>
        <p style="max-width:1130px; margin: 0 auto; margin-top: 30px">* Terms & conditions apply <br> NO REFUND POLICY</p>

      </div>
    </section><!-- End Menu Section -->