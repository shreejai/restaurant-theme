<?php 
  $eye_treatment_services = [
    'Eye Treatment' => [
      'Eyelash Lifting' => 60,
      'Eyelash Tinting' => 18,
      'Eyelash Lifting and Tinting combo' => 75,
      'Eyebrow Tinting Normal' => 15,
      'Eyebrow Tinting Hybrid' => 20,
      'Eyebrow Henna Tinting' => 35,
      'Eyebrow Lamination' => 50,
      'Eyebrow Lamination, Tinting and Tidy up combo' => 85
    ],
  ];

  foreach($eye_treatment_services as $eye_treatment_heading => $eye_treatment_service_list){
    foreach($eye_treatment_service_list as $eye_treatment_name => $eye_treatment_price) {
?>

    <div class="col-lg-6 menu-item filter-eye-treatment">
      <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
      <div class="menu-content">
        <a href="#"><?php echo $eye_treatment_name ?></a>
        <span>
          <?php echo is_numeric($eye_treatment_price)? '$'.$eye_treatment_price : $eye_treatment_price ; ?>
        </span>
      </div>
    </div>
<?php }} ?>