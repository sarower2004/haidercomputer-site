<div class="sidebar">
  <h4 class="text-center text-white">Admin Panel</h4>
  <hr class="bg-secondary">
  <a href="dashboard.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='dashboard.php') echo 'active-link'; ?>">
    <i class="fa fa-home"></i> Dashboard
  </a>
  <a href="students.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='students.php') echo 'active-link'; ?>">
    <i class="fa fa-users"></i> Students
  </a>
  <a href="teachers.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='teachers.php') echo 'active-link'; ?>">
    <i class="fa fa-chalkboard-teacher"></i> Teachers
  </a>
  <a href="courses.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='courses.php') echo 'active-link'; ?>">
    <i class="fa fa-book"></i> Courses
  </a>
  <a href="batches.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='batches.php') echo 'active-link'; ?>">
    <i class="fa fa-layer-group"></i> Batches
  </a>
  <a href="fees.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='fees.php') echo 'active-link'; ?>">
    <i class="fa fa-money-bill"></i> Fees
  </a>
  <a href="exams.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='exams.php') echo 'active-link'; ?>">
    <i class="fa fa-pen"></i> Exams
  </a>
  <a href="results.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='results.php') echo 'active-link'; ?>">
    <i class="fa fa-chart-line"></i> Results
  </a>
  <a href="notices.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='notices.php') echo 'active-link'; ?>">
    <i class="fa fa-bullhorn"></i> Notices
  </a>
  <a href="logout.php" class="text-danger">
    <i class="fa fa-sign-out-alt"></i> Logout
  </a>
</div>
