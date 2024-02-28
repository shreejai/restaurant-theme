<?php 
  $makeup_services = [
    'Make up' => [
      'Party Lashes' => 25,
      'Full Eye Make up' => 45,
      'Classic (Formal) Make up' => 100,
      'Full Glam Make up' => 150
    ],
  ];

  foreach($makeup_services as $makeup_heading => $makeup_service_list){
    foreach($makeup_service_list as $makeup_name => $makeup_price) {
?>

    <div class="col-lg-6 menu-item filter-makeup">
      <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
      <div class="menu-content">
        <a href="#"><?php echo $makeup_name ?></a>
        <span>
          <?php echo is_numeric($makeup_price)? '$'.$makeup_price : $makeup_price ; ?>
        </span>
      </div>
    </div>
<?php }} ?>