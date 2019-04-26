<?php
  include 'header.php';
  include 'nav.php';
?>
  <body>
    <ul class="breadcrumb">
      <li><a href="#"><img src="images/about-us.png"></a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Vision and Mission</a></li>
    </ul>

  <div class="w3-content w3-section" style="max-width:100%">
    <?php
    include 'our_story.php';
    ?>
    <img class="building" src="images/build.png" style="width:100%">
  </div>
  <section class="section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img alt="Web Studio" class="img-fluid" src="images/vision1.png"/></div>
        </div>
        <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <h2 style="text-decoration: underline;">Vision</h2>
          <p class="margin-top-s">To evolve a generation of God-conscious intellectuals that will be of immense value to humanity.</p>
        </div>
      </div>
    </div>
  </div>
  </section>

   <section class="section mt-5">
      <div class="container">
        <div class="row">
        <div class="col-md-6 mb-2">
        <div>

          <img alt="Web Studio" class="img-fluid" src="images/vision2.png"/>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <h2 style="text-decoration: underline;">Mission</h2>
          <p class="margin-top-s">To provide resources and services for would-be beneficiaries in order to acquire moral attitude and intellectual competence for the benefit of humanity.</p>
        </div>
      </div>
    </div>
  </div>
  </section>











</body>
<?php
include 'footer.php';
?>