<?php
$url1 = $_SERVER['REQUEST_URI'];
header("Refresh: 900; URL=$url1");
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:index.php');
}
?>


<?php
$tanggal = date("Y-m-d");
$blnA = date("m");
$blnB = date("m", strtotime('last month'));
$tglA = date("d");
$sebelum = date('Y-m-d', strtotime('-1 days'));
$skrg = date('d', strtotime('-0 days'));
$kmrn = date('d', strtotime('-1 days'));
$kmrn1 = date('d-F-Y', strtotime('-1 days'));
$kmrn2 = date('d-F-Y', strtotime('-2 days'));
$kmrn3 = date('d-F-Y', strtotime('-3 days'));
$kmrn4 = date('d-F-Y', strtotime('-4 days'));
$kmrn5 = date('d-F-Y', strtotime('-5 days'));
$kmrn6 = date('d-F-Y', strtotime('-6 days'));
$kmrnA = date('d-M-Y', strtotime('-1 days'));
$week = date('d', strtotime('8 days'));
$blnAA = date("F-Y");
$thnA = date("Y");
$thnB = date("Y", strtotime("-1 year"));
$blnBB = date("F-Y", strtotime('last month'));
?>

<?php
$nik = $_SESSION['alogin'];
$sql = "SELECT * from users where email = (:nik);";
$query = $dbh->prepare($sql);
$query->bindParam(':nik', $nik, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
$cnt = 1;
?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboard.php" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">HRMS TIFICO</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            4 notifikasi baru
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>KTP-NIK</h4>
              <p>KTP karyawan belum ada!</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>NPWP</h4>
              <p>NPWP karyawan belum ada!</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>BPJS</h4>
              <p>BPJS karyawan belum ada!</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Email & Emergency Contact</h4>
              <p>Famility contact tidak ada!</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Tampilkan semua notifikasi</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">3</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            3 pesan baru
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <?php
              $imgPath = "assets/img/" . $result->nik . ".png";
              if (!file_exists($imgPath)) {
                $imgPath = "assets/img/default.png";
              }
              echo
              "<img src='$imgPath' alt='' class='rounded-circle'>";
              ?>
              <div>
                <h4>Cecilia</h4>
                <p>SPL semua departemen untuk dikirimkan paling lambat puku 14:00wib...</p>
                <p>4 jam. lalu</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Juliana</h4>
                <p>Proses attendance all day 11Mar s/d 10Apr 2025...</p>
                <p>6 jam. lalu</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Pinto</h4>
                <p>Diklat untuk penggunaan APAR bagi karyawan produksi...</p>
                <p>8 jam. lalu</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Tampilkan semua pesan</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <?php
          $imgPath = "assets/img/" . $result->nik . ".png";
          if (!file_exists($imgPath)) {
            $imgPath = "assets/img/default.png";
          }
          echo
          "<img src='$imgPath' alt='' class='rounded-circle'>";
          ?>
          <span class="d-none d-md-block dropdown-toggle ps-2">Login Name : <?php echo htmlentities($_SESSION['alogin']); ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php echo htmlentities($result->name); ?></h6>
            <span><?php echo htmlentities($result->designation); ?></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-question-circle"></i>
              <span>Bantuan ?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->