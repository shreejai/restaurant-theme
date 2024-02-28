<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/c7aad1ddf6.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/tulip.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />

    <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet" type="text/css">
<style>
h1, h2, h3, .service-description {
 font-family: 'Adamina', sans-serif;
}
</style>

    <style>
      .service-row {
        text-align: left;
        padding-left: 2rem !important;
      }
      .service-description{
        font-style: italic;
      }

      /* #lashes,
      #perming,
      #men,
      #tinting {
        margin-top: -100px;
      } */

      #facials .table-striped tbody tr:nth-child(2n+1),
      #facials .table-striped tbody tr:nth-child(2n+2) {
      background-color: #252e37 !important; /* Change this to your desired background color */
    }
      #facials .table tr:nth-child(4n+1) td, 
      #facials  .table tr:nth-child(4n+2) td {
        background: #343a40 !important;
      }
    </style>

    <title>Tulip Lash N Brow</title>
  </head>
  <body style="background:#000">
    <!--------------Header----------------->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand wow fadeInDown" href="#"
            ><img src="img/tulip.png" width="70px" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#facials">Facials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lashes">Lashes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#threading">Threading</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#perming">Perming</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#men">For Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#perming">Tinting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--<div class="jumbotron jumbotron-fluid height100p banner" id="home">
      <div class="container h100">
        <div class="contentBox h100 wow fadeInUpBig">
          <div>
            <h1>Our Services</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
              earum tempore facilis doloribus unde eveniet non repellat
              consectetur sapiente nobis! Tempore saepe in soluta facere. Veniam
              nesciunt vero quos ut.
            </p>
          </div>
        </div>
      </div>
    </div>-->
    <!-------------------------Facial-------------------->
    <section class="sec1" id="facials" style="padding-top:200px">
      <div class="container">
        <div class="row">
          <div class="offset-sm-2 col-sm-8">
            <div class="headerText text-center wow fadeInUp">
              <h2>Facials for Him &amp; Her</h2>
              <table class="table table-striped table-dark">
                <tbody>
                    <?php
                        $services = [
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
                        foreach($services as $service_name => $service_details){
                    ?>
                    <tr>
                        <td rowspan = "2" class="service-row "><?php echo $service_name; ?></td>
                        <td class="service-row "><?php echo $service_details['time']; ?></td>
                        <td class="service-row "><?php echo '$'.$service_details['price']; ?></td>
                    </tr>
                    <?php if(isset($service_details['description'])){ ?>
                    <tr>
                      <td colspan="4" class="service-row service-description"><?php echo $service_details['description']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
              </table>
              <p style="font-size: small">*Terms &amp; Conditions apply <br> NO REFUND POLICY</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------Lashes, Brow, Threading-------------------->
    <section class="sec1" style="padding-top: 0">
      <div class="container">
        <div class="row">
          <div class="offset-sm-2 col-sm-8">
            <div class="headerText text-center wow fadeInUp">
              <h2>Brow and Lashes</h2>
              <?php 
              $brow_lash_services = [
                'Threading For Her' => [
                  'url_id' => 'threading',
                  'services' => [
                  'Eyebrow Threading' => 20,
                  'Lips' => 10,
                  'Chin' => 10,
                  'Side burns' => 15,
                  'Neck' => 15,
                  'Full face' => 50  
                  ]                
                ],
                'Threading and Waxing for Him' => [
                  'url_id' => 'men',
                  'services' =>[
                  'Eyebrow Threading/Waxing' => 20,
                  'Cheeks Threading/Waxing' => 22
                  ]
                ],
                'Eye Treatment' => [
                  'url_id' => 'perming',
                  'services' =>[
                  'Eyelash Lifting' => 60,
                  'Eyelash Tinting' => 18,
                  'Eyelash Lifting and Tinting combo' => 75,
                  'Eyebrow Tinting Normal' => 15,
                  'Eyebrow Tinting Hybrid' => 20,
                  'Eyebrow Henna Tinting' => 35,
                  'Eyebrow Lamination' => 50,
                  'Eyebrow Lamination, Tinting and Tidy up combo' => 85
                  ]
                ],
                'Eyelash Extensions' => [
                  'url_id' => 'lashes',
                  'services' =>[
                  'Classic Eyelash Extensions' => 100,
                  'Infill Classic Eyelash Extensions' => 'from $70',
                  'Hybrid Eyelash Extensions' => 110,
                  'Infill Hybrid Eyelash Extensions' => 'from $80',
                  'Volume Eyelash Extensions' => 125,
                  'Infill Volume Eyelash Extensions' => 'from $85'
                  ]
                ],
                'Henna Art' => [
                  'services' =>[
                  'Natural Henna designs' => 'from $15'
                  ]
                ],
                'Make up' => [
                  'services' =>[
                  'Party Lashes' => 25,
                  'Full Eye Make up' => 45,
                  'Classic (Formal) Make up' => 100,
                  'Full Glam Make up' => 150
                  ]
                ]

              ]; ?>
              <!--test-->
              <?php
                foreach($brow_lash_services as $service_section => $services){
              ?>
              <?php if(isset($services['url_id'])) {?>
                <p <?php echo "id = ".$services['url_id']; ?>>&nbsp;</p>
              <?php } ?>

              <p style="padding: 10px">&nbsp;</p>
              <h3 style="text-align:left; margin-top: 50px; margin-top: 50px; border: 1px solid #343a40; padding: 10px;"><?php echo $service_section; ?></h3>

              <table class="table table-striped table-dark">
                <tbody>
                    
                    <?php foreach($services['services'] as $service => $price) {?>
                    <tr>
                        <td class="service-row"><?php echo $service; ?></td>
                        <td class="service-row"><?php echo is_numeric($price)? '$'.$price : $price ; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
              <p style="font-size: small">*Terms &amp; Conditions apply <br> NO REFUND POLICY</p>

              <?php } ?>
              <!--test-->
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------Waxing-------------------->
    <section class="sec1" id="waxing" style="padding-top: 0px">
      <div class="container">
        <div class="row">
          <div class="offset-sm-2 col-sm-8">
            <div class="headerText text-center wow fadeInUp">
              <h2>Waxing</h2>
              <?php 
              $waxing_services = [
                'For Her' => [
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
                  'Full Legs' => 55 
                ],
                'Packages' => [
                  'Package 1' => ['description' => ' Half arms, Underarms, 1/2 Leg and Bikini Wax', 'price' => 95],
                  'Package 2' => ['description' => ' Full Arms, Underarms, Full Legs Brazilian', 'price' => 160],
                  'Package 3' => ['description' => '  Full Body (Full arms, Full Legs, Under Arms, Stomach, Brazilian)', 'price' => 190],
                ]
              ]; ?>
              <!--test-->
              <?php
                foreach($waxing_services as $service_section => $services){
              ?>
              <h3 style="text-align:left; margin-top: 50px; margin-top: 50px; border: 1px solid #343a40; padding: 10px;"><?php echo $service_section; ?></h3>

              <table class="table table-striped table-dark">
                <tbody>
                    
                    <?php foreach($services as $service_name => $service_details) {?>
                    <tr>
                        <td class="service-row"><?php echo $service_name; ?></td>
                        <?php if(is_array($service_details)) { ?>
                        <td class="service-row"><?php echo $service_details['description']; ?></td>
                        <td class="service-row"><?php echo $service_details['price']; ?></td>
                        <?php } else { ?> 
                        <td class="service-row"><?php echo is_numeric($service_details)? '$'.$service_details : $service_details ; ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
              <p style="font-size: small">*Terms &amp; Conditions apply <br> NO REFUND POLICY</p>

              <?php } ?>
              <!--test-->
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------Other Treatments-------------------->
    <section class="sec1" id="other-treatments" style="padding-top: 0px">
      <div class="container">
        <div class="row">
          <div class="offset-sm-2 col-sm-8">
            <div class="headerText text-center wow fadeInUp">
              <h2>Other Treatments</h2>
              <table class="table table-striped table-dark">
                <tbody>
                    <?php
                        $services = [
                          'Indian Head Massage'=>['time'=>'15 mins', 'price' => 30, 'description'=>'Our Indian head massage is a therapeutic practice that involves kneading, rubbing and pressing the head, neck and shoulders to relieve tension and promote relaxation'],
                        ];
                        foreach($services as $service_name => $service_details){
                    ?>
                    <tr>
                        <td rowspan = "2" class="service-row "><?php echo $service_name; ?></td>
                        <td class="service-row "><?php echo $service_details['time']; ?></td>
                        <td class="service-row "><?php echo '$'.$service_details['price']; ?></td>
                    </tr>
                    <?php if(isset($service_details['description'])){ ?>
                    <tr>
                      <td colspan="4" class="service-row service-description"><?php echo $service_details['description']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
              </table>
              <p style="font-size: small">*Terms &amp; Conditions apply <br> NO REFUND POLICY</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----------------------Contact-------------------------->

    <?php include('contact.php'); ?>

    <!------------------------------Footer-------------------------->
    <?php include('footer.php'); ?>
