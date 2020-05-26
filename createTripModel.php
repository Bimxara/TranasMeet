 <!-- large login create model -->
    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
              <form action="createTripController.php" method="POST">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Trip Destination</label>
                  <input type="text" name="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">From - To dates</label>
                  <input type="text" name="dates" class="form-control" id="exampleInputContact" aria-describedby="contactNum" placeholder="">
                  
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Preffered Date for meetup</label>
                  <input type="text" name="pdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Preffered Time for meetup</label>
                  <input type="text" name="ptime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Interested Topics</label>
                  <input type="text" name="topics" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>
                <input type="hidden" name="user" value="<?php echo $_SESSION["userID"]; ?>">
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Agreed with T&C</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

        </div>
      </div>
    </div>

    <!-- join model end-->