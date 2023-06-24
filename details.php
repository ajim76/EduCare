<?php require 'config.php'; ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="College Na​me">
    <meta name="description" content="">
    <title>details</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="details.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/8.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="details">
    <meta property="og:type" content="website">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body class="u-body u-xl-mode">

      <?php include 'header.php'; ?>
      <?php
        if(isset($_GET['rank'])){

          $rank=$_GET['rank'];
          $sql ="SELECT * FROM sheet1 where rank='$rank'";
          $result = $conn->query($sql);
          while($row=$result->fetch_assoc()){
            $img1=$row['c_img1'];
            $img2=$row['c_img2'];
            $name=$row['c_name'];
            $loc=$row['c_loc'];
            $fee=$row['c_fee'];
            $status=$row['c_status'];
            $degree=$row['c_degree'];
            $brochure=$row['c_brochure'];
            $code=$row['c_code'];
            $rank=$row['rank'];
            $desc =$row['c_desc'];
            $desc2 =$row['c_cutoff_desc'];
            $url =$row['c_url'];
?>
    <section class="u-align-center u-clearfix u-section-1" id="sec-124e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-georgia u-text u-text-custom-color-5 u-text-default u-text-1"><?= $name ?></h2>
        <div class="u-carousel u-expanded-width u-gallery u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" data-interval="3000" data-u-ride="carousel" id="carousel-9387">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-9387" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-9387" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1200" data-image-height="667">
                <img class="u-back-image u-expanded" src="College_Images/<?= $img1 ?>">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="640" data-image-height="960">
                <img class="u-back-image u-expanded" src="College_Images/<?= $img2 ?>">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-white u-carousel-control-1" href="#carousel-9387" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-white u-carousel-control-2" href="#carousel-9387" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <a href="College_brochure/<?= $brochure ?>" download='Brochure-College code: <?= $code?>' class="u-border-none u-btn u-button-style u-custom-color-8 u-hover-custom-color-8 u-btn-1">BROchure&nbsp;<span class="u-file-icon u-icon u-text-black u-icon-1"><img src="images/32.png" alt=""></span>
        </a>
        <a href="<?= $url ?>" class="u-border-none u-btn u-button-style u-custom-color-5 u-hover-custom-color-5 u-btn-2" target="_blank">Visit link&nbsp;<span class="u-file-icon u-icon u-text-white"><img src="images/33.png" alt=""></span>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-db7e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-custom-font u-font-georgia u-text u-text-custom-color-5 u-text-default u-text-1">About College </h3>
        <div class="u-container-style u-grey-10 u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-align-center u-text u-text-2"><?= $desc ?></p>
          </div>
        </div>
        <h3 class="u-custom-font u-font-georgia u-text u-text-custom-color-5 u-text-default u-text-3">Cutoffs of different Brnaches</h3>
        <div class="u-container-style u-grey-10 u-group u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <p class="u-align-center u-text u-text-4"><?= $desc2 ?></p>
          </div>
        </div>
      </div>
    </section>
    <?php } }?>


    <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-aea9"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/9.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-valign-top-xl u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-1"><!--block_header_content-->Get connected<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-left-sm u-align-left-xs u-block-content u-text"><!--block_content_content-->Facebook<br>Instagram<br>Youtube<br>LinkedIn<br>Twitter<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-align-left-sm u-align-left-xs u-block-header u-text u-text-3"><!--block_header_content-->About Educare<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-left-sm u-align-left-xs u-block-content u-text"><!--block_content_content-->About Us<br>Meet the team<br>Contact<br>Home<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><!--position-->
                  <div data-position="" class="u-position u-position-3"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-align-left-sm u-align-left-xs u-block-header u-text u-text-5"><!--block_header_content-->Our Services<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-left-sm u-align-left-xs u-block-content u-text u-text-6"><!--block_content_content-->Connect<br>Direct<br>Assist<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-container-layout-4"><!--position-->
                  <div data-position="" class="u-position u-position-4"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-align-left-sm u-align-left-xs u-block-header u-text u-text-7"><!--block_header_content-->Call Us <!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-left-sm u-align-left-xs u-block-content u-text"><!--block_content_content-->+91-xxxxx-xxxxx<br>Enquiries<br>xxxxxxxx@gamil.com<br>Counselling<br>xxxxxxx@gmial.com<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d9b2"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d9b2"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2b69"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2b69"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9af9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9af9"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-aabe"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-aabe"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>
    </section>
  </body>
</html>
