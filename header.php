<?php


if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> You can now login
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>';
        }

        if(isset($_GET['loggedin']) && $_GET['loggedin']=="true"){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                      <strong>Success!</strong> You are logged in.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
                }
              if(isset($_GET['loggedinerr']) && $_GET['loggedinerr']=="true")
              {
                  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Login required!</strong> Please login to access the page.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                }

                if(isset($_GET['perror']) && $_GET['perror']=="true"){
                    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                              <strong>Failed!</strong> Password is incorrect!
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
                        }
                        if(isset($_GET['uperror']) && $_GET['uperror']=="true"){
                            echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                                      <strong>Warning!</strong> Credintials are incorrect!
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>';
                                }

                                if(!isset($_SESSION))
                                {
                                    session_start();
                                }
echo '<header class="u-clearfix u-header u-header" id="sec-1a83"><div class="u-clearfix u-sheet u-sheet-1">

      <a href="about.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
        <img src="images/8.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container" style="display:inline;">
          <ul class="u-nav u-unstyled u-nav-1" style="display:inline;"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="" style="padding: 10px 20px;">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="connect.php">Connect</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="direct.php">Direct</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Assist.php">Assist</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" style="padding: 10px 20px;">Contact</a>

</li>';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<p class="text-dark my=0" style="display:inline;">Welcome <b>'.$_SESSION['useremail'].' </b></p>
  <a href="partials/logout.php" style="margin-right:5px; display:inline;" class="btn btn-primary py=0;" >Log Out</a>';
}
else{
  echo '<button type="button" style="margin-right:5px;" class="btn btn-light" data-toggle="modal" data-target="#loginmodal">Log In</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupmodal">Sign Up</button>';
}
echo '</ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="connect.php">Connect</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="direct.php">Direct</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Assist.php">Assist</a>
              </li>
            </ul>
          </div>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php">Contact</a>
          </li></ul>
      </div>
      </div>
      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
      </nav>
      </div></header>';



include 'partials/loginmodal.php';
include 'partials/signupmodal.php';





?>
