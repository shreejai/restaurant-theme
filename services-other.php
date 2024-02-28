<?php 
  $other_services = [
    'Indian Head Massage'=>['time'=>'15 mins', 'price' => 30, 'description'=>'Our Indian head massage is a therapeutic practice that involves kneading, rubbing and pressing the head, neck and shoulders to relieve tension and promote relaxation'],
  ];

  foreach($other_services as $other_name => $other_details){
?>

  <div class="col-lg-6 menu-item filter-other">
    <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
    <div class="menu-content">
      <a href="#"><?php echo $other_name ?></a>
      <span>
        <?php
          if(is_array($other_details) && isset($other_details['price'])){
            echo '$'.$other_details['price']; 
          }else{
            echo is_numeric($other_details)? '$'.$other_details : $other_details ;
          }
         ?>
      </span>
    </div>
    <?php  
      if(is_array($other_details)) {
        if(isset($other_details['description'])) { ?>
          <div class="menu-ingredients">
            <?php echo $other_details['description']; ?>
          </div>
        <?php } ?>
        <?php if(isset($other_details['time'])) { ?>
          <div class="menu-ingredients">
           <!-- Duration: <?php //echo $other_details['time']; ?> -->
            <i class="bi bi-clock d-flex align-items-center"><span> &nbsp;<?php echo $other_details['time']; ?></span></i>
          </div>
        <?php } ?>
      <?php } ?>
  </div>

<?php } ?>