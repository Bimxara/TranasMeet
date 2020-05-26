<!doctype html>
<html lang="en">
  <?php require 'header.php'; ?>

  <body>
    <div class="container-fluid">
    
                <!-- Navigation -->
        <?php require 'navigation.php'; ?>
                <!-- Slider -->
        <?php require 'slider.php'; ?>
        

        <!-- Page Content -->
        <section class="py-5">
          <div class="container">
            <h1 class="display-4">introduction goes here</h1>
            <p class="lead">add some rich working here </p>
          </div>
        </section>


            

          <!-- events card deck -->
          <?php require 'eventDeck.php'; ?>
          <!-- events card deck end --->


          <!-- User can see a list of meetups they marked attendance -->
          <!-- if session has user -->
          <?php
              if (isset( $_SESSION["name"])) { ?>
                    
                    <section class="py-5">
                      <div class="container">
                        <h1 class="display-4">Your Marked Events</h1>
                        <p class="lead">Events with your attendence marked will appear here </p>
                      </div>
                    </section>
                    
                    <section class="py-5">
                      <?php require 'MarkedeventDeck.php'; ?>
                    </section>

              <?php }else{
                echo "Change";
              }
              

          ?>
            

          <!-- User can see a list of meetups they marked attendance end --->


          <section>
            <div class="col-md-12">
                <!--The div element for the map -->
                <div id="map"></div>
            </div>
          </section>

          <?php require 'footer.php'; ?>
    </div>


     <?php require 'createTripModel.php'; ?>
     <?php require 'joinModel.php'; ?>
     <?php require 'loginFormModel.php'; ?>




    


    <!-- Optional JavaScript -->

     <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: -25.344, lng: 131.036};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHIH8R1DpU0n4UP0C5g14_IPFlFf3JCTU&callback=initMap">
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>