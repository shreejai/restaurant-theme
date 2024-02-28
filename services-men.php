<?php 
  $men_services = [
    'Threading and Waxing for Him' => [
      'Eyebrow Threading/Waxing for Him' => 20,
      'Cheeks Threading/Waxing for Him' => 22
    ],
  ];

  foreach($men_services as $men_heading => $men_service_list){
    foreach($men_service_list as $men_name => $men_price) {
?>

    <div class="col-lg-6 menu-item filter-men">
      <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
      <div class="menu-content">
        <a href="#"><?php echo $men_name ?></a>
        <span>
          <?php echo is_numeric($men_price)? '$'.$men_price : $men_price ; ?>
        </span>
      </div>
    </div>
<?php }} ?>