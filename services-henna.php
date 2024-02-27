<?php 
            $henna_services = [
              'Henna Art' => [
                'Natural Henna designs' => 'from $15'
              ],
            ];

            foreach($henna_services as $henna_heading => $henna_service_list){
              foreach($henna_service_list as $henna_name => $henna_price) {
          ?>

          <div class="col-lg-6 menu-item filter-henna">
            <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
            <div class="menu-content">
              <a href="#"><?php echo $henna_name ?></a>
              <span>
                <?php echo is_numeric($henna_price)? '$'.$henna_price : $henna_price ; ?>
              </span>
            </div>
          </div>

          <?php }} ?>