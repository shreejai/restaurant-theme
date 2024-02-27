<?php 
            $facials = [
              'Clean up Facial'=>['time'=>'30 mins', 'price' => 59, 'description'=>'Swift cleanse, gentle exfoliation, targeted mask—Clean-Up Facial for instant skin rejuvenation and radiance.'],
              'Classic Facial '=>['time'=>'45 mins', 'price' => 67, 'description'=>'In a classic facial, experience a gentle cleanse, exfoliation, extractions, soothing mask, and hydrating finale for refreshed, radiant skin.'],
              'Purifying Facial'=>['time'=>'60 mins', 'price' => 99, 'description'=>'The Purifying Facial deeply cleanses with targeted treatments, extracts impurities, and applies a detoxifying mask. Specialized care leaves your skin clear, revitalized, and refreshed, promoting a healthy complexion.'],
              'Relaxation Facial treatment'=>['time'=>'60 mins', 'price' => 99, 'description'=>'The Relaxation Facial Treatment is a tranquil escape featuring gentle cleansers, a calming mask, and soothing massage. Unwind as it rejuvenates your skin, leaving you relaxed and refreshed.
              '],
              'Hydrating Facial Treatment'=>['time'=>'60 mins', 'price' => 99, 'description'=>'Indulge in our Hydrating Facial treatment, featuring nourishing cleansers, a replenishing mask, and hydrating serums. Luxurious hydration leaves your skin radiant, smooth, and deeply moisturized.
              '],
              'Radiance-Enhancing Facial'=>['time'=>'60 mins', 'price' => 110, 'description'=>'Experience our Radiance-Enhancing Facial, a luminous journey with brightening cleansers, revitalizing treatments, and a radiant mask, leaving your skin glowing, refreshed, and beautifully illuminated and de-tanned. 
              '],
              'Anti-aging Facial treatment'=>['time'=>'60 mins', 'price' => 115, 'description'=>'Indulge in our Anti-Aging Facial, featuring potent serums, rejuvenating treatments, and a firming mask to diminish fine lines, promote elasticity, and restore a youthful complexion. 
              '],
              'Face bleaching with Mask'=>['time'=>'30-40 mins', 'price' => 60],
            ];

            foreach($facials as $facial_name => $facial_details){
          ?>

          <div class="col-lg-6 menu-item filter-facials">
            <!-- <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt=""> -->
            <div class="menu-content">
              <a href="#"><?php echo $facial_name ?></a><span><?php echo '$'.$facial_details['price'] ?></span>
            </div>
            <?php if(isset($facial_details['description'])) { ?>
              <div class="menu-ingredients">
                <?php echo $facial_details['description']; ?>
              </div>
            <?php } ?>
            <?php if(isset($facial_details['time'])) { ?>
              <div class="menu-ingredients">
                <!-- Duration: <?php echo $facial_details['time']; ?> -->
                <i class="bi bi-clock d-flex align-items-center"><span> &nbsp;<?php echo $facial_details['time']; ?></span></i>
              </div>
            <?php } ?>
          </div>

          <?php } ?>