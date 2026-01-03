<?php
include "config/db.php";
$jobs = mysqli_query($conn, "SELECT * FROM jobs");
?>

<?php while ($job = mysqli_fetch_assoc($jobs)) { ?>
  <h3><?= $job['title'] ?></h3>
  <p><?= $job['company'] ?> - <?= $job['location'] ?></p>
<?php } ?>
