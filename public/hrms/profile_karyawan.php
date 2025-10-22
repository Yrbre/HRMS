<?php
$url1 = $_SERVER['REQUEST_URI'];
header("Refresh: 1900; URL=$url1");
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['edit'])) {
  $editid = $_GET['edit'];
}

$sql = "SELECT * from employee where nomor = :editid;";
$query = $dbh->prepare($sql);
$query->bindParam(':editid', $editid, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profil Karyawan - HRMS Tifico</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <?php
  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/database.php');
  ?>

  <?php
  $sql = "SELECT * from employee where nomor = :editid";
  $query = $dbh->prepare($sql);
  $query->bindParam(':editid', $editid, PDO::PARAM_INT);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_OBJ);
  $cnt = 1;
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="datasheet_karyawan.php">Karyawan</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-3">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <?php
              $imgPath = "assets/img/" . $result->nik . ".png";
              if (!file_exists($imgPath)) {
                $imgPath = "assets/img/default.png";
              }
              echo
              "<img src='$imgPath' alt='Profiles' class='rounded-circle'>";
              ?>
              <h2><?php echo htmlentities($result->namalengkap); ?></h2>
              <h3><?php echo htmlentities($result->jabdesc); ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-9">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>



                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Merit Rating</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-training">Education & Training</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-wp">Award & Warning Paper</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Family Contact</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-inventory">Inventory</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <p class="fw-bold"></p>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 small fst-italic fw-bold">Nomor Induk Karyawan</div>
                    <div class="col-lg-9 col-md-8 label small fw-bold">: <?php echo htmlentities($result->nomor); ?> <span class=' badge bg-info text-uppercase'><?php echo htmlentities($result->jkdesc); ?></span></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 small fst-italic fw-bold">Department</div>
                    <div class="col-lg-9 col-md-8 label small fw-bold">: <?php echo htmlentities($result->deptdesc); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 small fst-italic fw-bold">Joint Date</div>
                    <div class="col-lg-9 col-md-8 small label fw-bold">: <?php echo htmlentities($result->tglmasuk); ?> | <span><?php echo htmlentities($result->mk_thn); ?> tahun </span> | <span><?php echo htmlentities($result->mk_bln); ?> bulan </span> | <span><?php echo htmlentities($result->mk_hari); ?> hari </span></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 small fst-italic fw-bold">Jabatan & Grade</div>
                    <div class="col-lg-9 col-md-8 label small fw-bold">: <?php echo htmlentities($result->jabdesc); ?> ( <span><?php echo htmlentities($result->gradedesc); ?> ) </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 small fst-italic fw-bold">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8 label small fw-bold">: <?php echo htmlentities($result->tempatlahir); ?> <span><?php echo htmlentities($result->tgl_lahir); ?> | </span>
                      <span><?php echo htmlentities($result->umur_thn); ?> tahun, </span>
                      <span><?php echo htmlentities($result->umur_bln); ?> bulan, </span>
                      <span><?php echo htmlentities($result->umur_hari); ?> hari. </span>
                    </div>
                  </div>


                  <div class="row">
                    <table class="table table-hover small" cellspacing="0" width="200%">
                      <thead class="thead-light font-weight-bold text-dark">
                        <tr>
                          <th scope="col">Jabatan</th>
                          <th scope="col">Mulai</th>
                          <th scope="col">Sampai</th>
                          <th scope="col">Designation</th>
                        </tr>
                      </thead>
                      <tbody class="text-dark">
                        <?php
                        $sql =  mysqli_query($mysqli, "select nik as NIK1, namakaryawan as NAMA, jabatan as LVL, tglfrom as THNFROM, tglto as THNTO, note as NOTE from designation");
                        $no = 1;
                        while ($mhs = mysqli_fetch_array($sql)) {
                          echo
                          "<tr>
                                            <td align='left'><span class='badge bg-info'>$mhs[LVL]</span></td>                                                                
                                            <td align='left'>$mhs[THNFROM]</td>
                                            <td align='left'>$mhs[THNTO]</td>
                                            <td align='left'>$mhs[NOTE]</td>
                                            </tr>";
                          $no++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>


                <div class="tab-pane fade pt-3" id="profile-settings">
                  <!-- Settings Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Key Performance Indicator</label>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">Leadership (Kepemimpinan)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">Team Work (Kerjasama)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">Integrity (Integritas)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked>
                          <label class="form-check-label" for="securityNotify">Complience (Kepatuhan)</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">Quantity (Kuantitas) </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">Quality (Kualitas)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers" checked>
                          <label class="form-check-label" for="proOffers">Knowledge (Pengetahuan)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked>
                          <label class="form-check-label" for="securityNotify">Achievement (Pencapaian)</label>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- End settings Form -->

                </div>

                <!-- Profile Education & Training -->
                <div class="tab-pane fade pt-3" id="profile-training">
                  <div class="col-lg-3 col-md-12"><span class='badge bg-info text-uppercase'>Education</span></div>
                  <table class="table table-hover small" cellspacing="0" width="200%">
                    <thead class="thead-light font-weight-bold text-dark">
                      <tr>
                        <th scope="col">Lulusan</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Referensi</th>
                        <th scope="col">Note</th>
                      </tr>
                    </thead>
                    <tbody class="text-dark">
                      <?php
                      $sql =  mysqli_query($mysqli, "select nik as NIK1, namakaryawan as NAMA,
                                                edu_level as LVL, edu_entity as ETY, edu_subject as SBJ, edu_yearfrom as THNFROM,
                                                edu_yearto as THNTO, edu_ref as REF, edu_note as NOTE from education");
                      $no = 1;
                      while ($mhs = mysqli_fetch_array($sql)) {
                        echo
                        "<tr>
                                                                <td align='left'>$mhs[LVL]</td>
                                                                <td align='left'>$mhs[SBJ]</td>
                                                                <td align='center'>$mhs[THNFROM]</td>
                                                                <td align='center'>$mhs[THNTO]</td>
                                                                <td align='left'>$mhs[REF]</td>
                                                                <td align='left'>$mhs[NOTE]</td>
                                                            </tr>";
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>
                  <div class="col-lg-3 col-md-12"><span class='badge bg-info text-uppercase'>Training</span></div>
                </div>
                <!-- Profile Education & Training -->


                <!-- Profile Awar & Warning Paper -->
                <div class="tab-pane fade pt-3" id="profile-wp">
                  <div class="col-lg-3 col-md-12"><span class='badge bg-success text-uppercase'>Penghargaan</span></div>
                  <table class="table table-hover small" cellspacing="0" width="200%">
                    <thead class="thead-light font-weight-bold text-dark">
                      <tr>
                        <th scope="col">Lulusan</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Referensi</th>
                        <th scope="col">Note</th>
                      </tr>
                    </thead>
                    <tbody class="text-dark">
                      <?php
                      $sql =  mysqli_query($mysqli, "select nik as NIK1, namakaryawan as NAMA,
                                                edu_level as LVL, edu_entity as ETY, edu_subject as SBJ, edu_yearfrom as THNFROM,
                                                edu_yearto as THNTO, edu_ref as REF, edu_note as NOTE from education");
                      $no = 1;
                      while ($mhs = mysqli_fetch_array($sql)) {
                        echo
                        "<tr>
                                                                <td align='left'>$mhs[LVL]</td>
                                                                <td align='left'>$mhs[SBJ]</td>
                                                                <td align='center'>$mhs[THNFROM]</td>
                                                                <td align='center'>$mhs[THNTO]</td>
                                                                <td align='left'>$mhs[REF]</td>
                                                                <td align='left'>$mhs[NOTE]</td>
                                                            </tr>";
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>
                  <div class="col-lg-3 col-md-12"><span class='badge bg-danger text-uppercase'>Warning Paper (WP)</span></div>
                </div>
                <!-- Profile Awar & Warning Paper -->


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Nama Isteri/Suami</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">No. Telpon Rumah</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">No. Handphone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>
                  </form><!-- End Change Password Form -->
                </div>

                <div class="tab-pane fade pt-3" id="profile-inventory">
                  <!-- Settings Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Inventaris Perusahaan</label>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">Seragam</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">Topi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers" checked>
                          <label class="form-check-label" for="proOffers">ID Card</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked>
                          <label class="form-check-label" for="securityNotify">Handphone</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">Kendaraan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts">
                          <label class="form-check-label" for="newProducts">Kartu Asuransi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">Safety shoes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify">
                          <label class="form-check-label" for="securityNotify">Kunci Gudang</label>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- End settings Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>

</body>

</html>