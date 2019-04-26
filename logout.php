<?php
  include 'header.php';
  include 'nav.php';
?>
<body>



  <div class="pagebanner"  style="background: /*#00004d*/ #9999ff">  
  <div class="region region-page-banner-text">
  <div id="block-blockify-blockify-page-title" class="block block-blockify">
  <div class="content">
    <h1 class="title" id="page-title" style="color: #fff !important">User account</h1>  
  </div>
  </div>
  <div id="block-blockify-blockify-breadcrumb" class="block block-blockify">
  <div class="content">
    <nav class="breadcrumb"  style="background: /*#00004d*/ #9999ff"><a href="index.php" style="color: #fff">Home</a> » <a href="#" title="" class="active" style="color: #fff">User account</a> »</nav>  </div>
  </div>
  </div>
  </div>
  </div>

  <div class="row">
  <div class="col-md-6 form-group">
  </div>
  </div>
<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: login.php");
}
?>
</body>
<?php
include 'footer.php';
?>