<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">TranasMeet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                    <?php
                        if (isset( $_SESSION["name"])) { ?>
                              <li class="nav-item active">
                                <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg2" href="#">Create new trip
                                      <span class="sr-only">(current)</span>
                                    </a>
                              </li>

                        <?php }else{
                          echo "";
                        }
                        

                    ?>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Community</a>
                </li>
                    <?php
                        if (isset( $_SESSION["name"])) { ?>
                              <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log Out</a>
                              </li>

                        <?php }else{  ?>
                          <li class="nav-item">
                            <a class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg" href="#">Join</a>
                          </li>

                          <li class="nav-item">
                               <a class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg-login" href="#">Login</a>
                          </li>
                        <?php }
                        

                    ?>
                
              </ul>
            </div>
          </div>
        </nav>