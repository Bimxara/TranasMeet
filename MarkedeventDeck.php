<div>
              <div class="card-deck">
<?php
require 'database.php';

$userID = $_SESSION["userID"];
$sql = "SELECT * FROM trips INNER JOIN attend ON trips.id = attend.tripID WHERE attend.userID = $userID;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
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

          