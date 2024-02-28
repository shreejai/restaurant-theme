<?php 
  $waxing_services = [
      'Eyebrow' => 18,
      'Lip' => 10,
      'Chin' => 10,
      'Sides' => 15,
      'Neck' => 15,
      'Full Face' => 50,
      'Underarms' => 22,
      '1/2 Arms' => 27,
      '3/4 Arms' => 32,
      'Full Arms' => 37,
      'Stomach Lines' => 15,
      'Stomach' => 'from $30',
      'Half Back' => 40,
      'Full Back' => 'from $55',
      'Basic Bikini' => 22,
      'Brazilian' => 'from $50',
      '1/2 Legs' => 30,
      'Full Legs' => 55,
      'Waxing Package 1' => ['description' => ' Half arms, Underarms, 1/2 Leg and Bikini Wax', 'price' => 95],
      'Waxing Package 2' => ['description' => ' Full Arms, Underarms, Full Legs Brazilian', 'price' => 160],
      'Waxing Package 3' => ['description' => '  Full Body (Full arms, Full Legs, Under Arms, Stomach, Brazilian)', 'price' => 190],
  ];

  foreach($waxing_services as $waxing_name => $waxing_details){
?>

  <div class="col-lg-6 menu-item filter-waxing">
    <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
    <div class="menu-content">
      <a href="#"><?php echo $waxing_name ?></a>
      <span>
        <?php
          if(is_array($waxing_details) && isset($waxing_details['price'])){
            echo '$'.$waxing_details['price']; 
          }else{
            echo is_numeric($waxing_details)? '$'.$waxing_details : $waxing_details ;
          }
         ?>
      </span>
    </div>
    <?php  
      if(is_array($waxing_details)) {
        if(isset($waxing_details['description'])) { ?>
          <div class="menu-ingredients">
            <?php echo $waxing_details['description']; ?>
          </div>
        <?php } ?>
        <?php if(isset($waxing_details['time'])) { ?>
          <div class="menu-ingredients">
           <!-- Duration: <?php //echo $waxing_details['time']; ?> -->
            <i class="bi bi-clock d-flex align-items-center"><span> &nbsp;<?php echo $waxing_details['time']; ?></span></i>
          </div>
        <?php } ?>
      <?php } ?>
  </div>

<?php } ?>