<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HRMS Datasheet Probation</title>
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
                  <h5 class="card-title">Informasi <span>| Karyawan Probation </span></h5>

                  <!-- Search Button -->
                  <form method="GET" action="">
                    <div class="input-group mb-2 w-25 ms-auto ">
                      <input type="text" class="form-control" placeholder="Search" name="search"
                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                      <button class="btn btn-outline-primary" type="submit" id="search">
                        <i class="ri-search-eye-line"></i>
                      </button>
                    </div>
                  </form>

                  <table class="table table-hover" cellspacing="0" width="200%">
                    <thead class="thead-light font-weight-bold text-primary">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Department</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tgl Masuk</th>
                        <th scope="col">View</th>
                      </tr>
                    </thead>
                    <tbody class="text-dark">
                      <?php
                      $refesh =
                        $keyword = isset($_GET['search']) ? mysqli_real_escape_string($mysqli, $_GET['search']) : "";

                      // query dasar
                      $query = "
                      SELECT nik, nomor, namalengkap, jkcode, jkdesc, jabdesc, deptdesc, deptcode, sexdesc, calgrp, grade,
                      tglmasuk, masakerja, mk_thn, mk_bln, mk_hari,
                      tempatlahir, tgl_lahir, umur_thn, umur_bln, umur_hari
                      FROM employee
                      WHERE jabdesc IS NOT NULL 
                      AND jkdesc = 'probation'
                      ";

                      if ($keyword != "") {
                        $query .= " AND (
                                    namalengkap LIKE '%$keyword%' 
                                    OR nik LIKE '%$keyword%' 
                                    OR deptdesc LIKE '%$keyword%' 
                                    )";
                      }

                      // urutkan hasil
                      $query .= " ORDER BY umur_thn DESC";

                      // eksekusi query
                      $sql = mysqli_query($mysqli, $query);

                      $no = 1;
                      while ($mhs = mysqli_fetch_array($sql)) {
                        $imgPath = "assets/img/" . $mhs['nik'] . ".png";
                        if (!file_exists($imgPath)) {
                          $imgPath = "assets/img/default.png"; // Jika gambar tidak ada, gunakan default.png
                        }

                        echo "
                      <tr>
                      <td align='right'>$no</td>  
                      <td align='center'>
                      <img src='$imgPath'
                        width='40' height='40' 
                        alt='{$mhs['namalengkap']}'
                        class='rounded-circle'>
                      </td>
                      <td align='center'><small>{$mhs['nomor']}</small></td>                                              
                      <td align='left'><span class='badge rounded-pill bg-primary'>{$mhs['namalengkap']}</span></td>  
                      <td align='left'><small>{$mhs['deptdesc']}</small></td>        
                      <td align='left'><small>{$mhs['jabdesc']}</small></td>        
                      <td align='left'><small>{$mhs['tempatlahir']}</small></td>
                      <td align='left'><small>{$mhs['tgl_lahir']}</small></td>
                      <td align='left'><small>{$mhs['umur_thn']}</small></td>
                      <td align='left'><small class='badge rounded-pill bg-info'>{$mhs['jkdesc']}</small></td>
                      <td align='left'><small>{$mhs['tglmasuk']}</small></td>
                      <td align='center'>
                      <i class='bi bi-folder2-open font-weight-bold text-primary fs-5'></i>
                      <a class='text-info' href='profile_karyawan.php?edit={$mhs['nomor']}'>&nbspDetail</a>&nbsp;
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


            <!-- Left side columns -->
            <div class="col-lg-12">
              <div class="row">

                <!-- Sales Card
                <div class="col-xxl-6 col-md-6">
                  <div class="card info-card sales-card">

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
                    </div> -->

                <!-- <div class="card-body">
                      <h5 class="card-title">Kelompok Usia Pensiun 55-57 <span>| by Departement</span></h5>
                      <script src="Chart.bundle.js"></script>
                              backgroundColor: [
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)'
                              ],
                              borderColor: [
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)'
                              ],
                              borderWidth: 1
                            }, ]
                          },
                          options: {
                            scales: {
                              yAxes: [{
                                ticks: {
                                  beginAtZero: true,
                                  stepSize: 1000,
                                  fontSize: 10
                                }
                              }]
                            }
                          }
                        });
                      </script>
                    </div> -->

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- <div class="col-xxl-6 col-md-6">
                  <div class="card info-card revenue-card">

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
                      <h5 class="card-title">Kelompok Usia Pensiun 55-57 <span>| by Jabatan</span></h5>

                      <script src="Chart.bundle.js"></script>
                      <?php
                      $bulanBM1KAP       = mysqli_query($mysqli, "SELECT jabdesc as TGLBM2, count(nik) as qtyBM1KAP from employee where jabdesc is not null and umur_thn between 55 and 57 group by jabdesc order by count(nik) desc");
                      $penghasilanBM1KAP = mysqli_query($mysqli, "SELECT jabdesc as TGLBM2, count(nik) as qtyBM1KAP from employee where jabdesc is not null and umur_thn between 55 and 57 group by jabdesc order by count(nik) desc");
                      ?>
                      <canvas id="myChartallz" width="400" height="200"></canvas>
                      <script>
                        var ctx = document.getElementById("myChartallz");
                        var myChart = new Chart(ctx, {
                          type: 'horizontalBar',

                          data: {
                            labels: [<?php while ($b = mysqli_fetch_array($bulanBM1KAP)) {
                                        echo '"' . $b['TGLBM2'] . '",';
                                      } ?>],
                            datasets: [{
                              label: 'Jumlah',
                              data: [<?php while ($p = mysqli_fetch_array($penghasilanBM1KAP)) {
                                        echo '"' . $p['qtyBM1KAP'] . '",';
                                      } ?>],
                              backgroundColor: [
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)',
                                'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)', 'rgba(0, 0, 153, 0.2)'
                              ],
                              borderColor: [
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 20, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)',
                                'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)', 'rgba(10, 10, 10, 1)'
                              ],
                              borderWidth: 1
                            }, ]
                          },
                          options: {
                            scales: {
                              yAxes: [{
                                ticks: {
                                  beginAtZero: true,
                                  stepSize: 1000,
                                  fontSize: 10
                                }
                              }]
                            }
                          }
                        });
                      </script>

                    </div>

                  </div>
                </div> -->
            <!-- End Revenue Card -->
          </div>
        </div>





      </div>



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