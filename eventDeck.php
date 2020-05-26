<div>
              <div class="card-deck">
<?php
require 'database.php';
$sql = "SELECT id,destination, dates, pdate, ptime, topics, description, user FROM trips";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id =  $row["id"];
    $destination =  $row["destination"];
    $dates =  $row["dates"];
    $pdate =  $row["pdate"];
    $ptime =  $row["ptime"];
    $topics =  $row["topics"];
    $user =  $row["user"]; ?>

        <div class="card" style="max-width: 16%">
          <img src="https://4.img-dpreview.com/files/p/E~TS590x0~articles/3925134721/0266554465.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Trip meetup</h5>
            <p class="card-text"><?php echo $destination; ?></p>
            <p class="card-text"><?php echo $ptime; ?></p>
            <p class="card-text"><?php echo $topics; ?></p>
            <form method="POST" action="attend.php">
              <input type="hidden" name="tripID" value="<?php echo $id; ?>">
              <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"]; ?>">
              <button type="submit" class="btn btn-primary">Attend</button>
            </form>

          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>



 <?php }
} else {
  echo "0 results";
}
$conn->close();
?>


</div>
</div>

          