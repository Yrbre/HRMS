<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HRMS Datasheet Karyawan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

</head>

<body>
  <!-- link to header and navbar ----------------------
<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/database.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:index.php');
} else {
  if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $sql = "delete from p_cprecanalis WHERE id=:id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $query->execute();
    echo "<script type='text/javascript'>alert('Data berhasil dihapus...!');</script>";
  }
}
?>

  -----end linked ------------------------------------- -->

  <main id="main" class="main">
    <!-- 
  ===================================================================================================================================================
  * Template Name: NiceAdmin - v2.4.1
  * Author: BootstrapMade.com
  * Customize : Subur Haryawan
  * Function : Dashboard HAERMES Tifico
  ===================================================================================================================================================
   -->
    <section class="section dashboard">
      <div class="row">


        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Informasi <span>| Karyawan</span> <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlentities($_SESSION['alogin']); ?></span></h5>

                  <table class="table table-hover datatable" cellspacing="0" width="200%">
                    <thead class="thead-light font-weight-bold text-primary">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Department</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Working</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tgl Masuk</th>
                        <th scope="col">View</th>
                      </tr>
                    </thead>
                    <tbody class="text-dark">
                      <?php
                      $sql = mysqli_query($mysqli, "
                                    select nik, nomor, namalengkap, jkcode, jkdesc, jabdesc, deptdesc, deptcode, sexdesc, calgrp, grade, tglmasuk, masakerja, mk_thn, mk_bln, mk_hari
                                    from employee where jabdesc is not null
                                    order by deptdesc, masakerja desc
                                    ");
                      $no = 1;
                      while ($mhs = mysqli_fetch_array($sql)) {
                        echo
                        "<tr>
                                              <td align='right'>$no</td>  
                                              <td align='center'><img src='images/bod-&-boc-01.png' width='40' height='40' alt='' class='rounded-circle'></td>
                                              <td align='center'><small>$mhs[nomor]</small></td>                                              
                                              <td align='left'?><span class=' badge rounded-pill bg-primary'>$mhs[namalengkap]</span></td>  
                                              <td align='left'><small>$mhs[deptdesc]</small></td>        
                                              <td align='left'><small>$mhs[jabdesc]</small></td>
                                              <td align='left'><small>$mhs[grade]</small></td>
                                              <td align='left'><small>$mhs[calgrp]</small></td>
                                              <td align='left'><small>$mhs[jkdesc]</small></td>
                                              <td align='left'><small>$mhs[tglmasuk]</small></td>
                                              <td align='center'>
                                                  <i class='bi bi-folder2-open font-weight-bold text-primary fs-5'></i>
                                                  <a class='text-info' href='profile_karyawan.php?edit=$mhs[nomor]';>&nbspDetail</a>&nbsp;
                                              </td>
                                        </tr>";
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->





            <!-- Top Selling -->
            <div class="col-12">

              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Kelompok Jabatan <span>| Karyawan</span></h5>



                </div>

              </div>
            </div>


          </div>
          <!-- End Top Selling -->




        </div>
        <!-- End Left side columns -->








      </div>
    </section>

  </main><!-- End #main -->

  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>

</body>

</html>