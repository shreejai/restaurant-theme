<?php 
            $threading_services = [
              'Threading For Her' => [
                'Eyebrow Threading' => 20,
                'Lips' => 10,
                'Chin' => 10,
                'Side burns' => 15,
                'Neck' => 15,
                'Full face' => 50,                  
              ],
              'Threading and Waxing for Him' => [
                'Eyebrow Threading/Waxing for Him' => 20,
                'Cheeks Threading/Waxing for Him' => 22
              ],
            ];

            foreach($threading_services as $threading_heading => $threading_service_list){
              foreach($threading_service_list as $threading_name => $threading_price) {
          ?>

          <div class="col-lg-6 menu-item filter-threading">
            <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
            <div class="menu-content">
              <a href="#"><?php echo $threading_name ?></a><span><?php echo '$'.$threading_price; ?></span>
            </div>
          </div>

          <?php }} ?>