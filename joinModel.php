<!-- large login join model -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
              <form method="POST" action="registerController.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Occupation</label>
                  <input type="text" name="occupation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile number</label>
                  <input type="text" name="mobile" class="form-control" id="exampleInputContact" aria-describedby="contactNum" placeholder="">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Interested Areas</label>
                  <input type="text" name="areas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                  
                </div>
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