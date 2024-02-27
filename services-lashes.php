<?php 
            $lash_services = [
              'Eyelash Extensions' => [
                'Classic Eyelash Extensions' => 100,
                'Infill Classic Eyelash Extensions' => 'from $70',
                'Hybrid Eyelash Extensions' => 110,
                'Infill Hybrid Eyelash Extensions' => 'from $80',
                'Volume Eyelash Extensions' => 125,
                'Infill Volume Eyelash Extensions' => 'from $85',
                'Party Lashes' => 25,
              ],
            ];

            foreach($lash_services as $lash_heading => $lash_service_list){
              foreach($lash_service_list as $lash_name => $lash_price) {
          ?>

          <div class="col-lg-6 menu-item filter-lashes">
            <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
            <div class="menu-content">
              <a href="#"><?php echo $lash_name ?></a><span><?php echo '$'.$lash_price; ?></span>
            </div>
          </div>

          <?php }} ?>