<?php
// session_start();
// if (!isset($_SESSION['admin'])) {
//     header("Location: ../login.php");
//     exit();
// }
include("includes/header.php");
include("includes/sidebar.php");
?>

<?php
// session_start();
// if (!isset($_SESSION['admin_id'])) {
//     header("Location: login.php");
//     exit;
// }
?>


  <!-- Header -->
 

<div class="content">
    <header class="main-header">
        <h1>হায়দার কম্পিউটার ট্রেনিং সেন্টার</h1>
        <p>সাকোয়া বাজার, বোদা, পঞ্চগড়</p>
    </header>
  <h2>Dashboard</h2>
  <div class="row mt-4">
    <div class="col-md-3 mb-3">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h5>Students</h5>
          <p class="fs-4">120</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h5>Courses</h5>
          <p class="fs-4">15</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-warning text-dark">
        <div class="card-body">
          <h5>Batches</h5>
          <p class="fs-4">6</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-danger text-white">
        <div class="card-body">
          <h5>Pending Fees</h5>
          <p class="fs-4">৳25,000</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
