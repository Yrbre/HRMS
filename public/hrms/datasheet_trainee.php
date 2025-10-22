<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HRMS Datasheet Trainee</title>
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
// include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/database-local.php');
include('includes/config-lokal.php');
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

                  <table class="table table-hover" cellspacing="0" width="200%">
                    <thead class="thead-light font-weight-bold text-primary">

                    </thead>
                    <tbody class="text-dark">
                      <?php
                      // Query untuk mengambil data karyawan
                      $sql = mysqli_query($mysqli, "
    SELECT nik, nomor, namalengkap, jkcode, jkdesc, jabdesc, deptdesc, deptcode, sexdesc, calgrp, grade, tglmasuk, masakerja, mk_thn, mk_bln, mk_hari
    FROM employee 
    WHERE jabdesc IS NOT null
    ORDER BY deptdesc, masakerja DESC
");

                      $no = 1;
                      ?>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Department</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Pelatihan Terakhir</th>
                            <th scope="col">Rincian</th>


                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($mhs = mysqli_fetch_array($sql)) { ?>
                            <tr>
                              <td align='right'><?= $no ?></td>
                              <td align='center'><img src='images/bod-&-boc-01.png' width='40' height='40' alt='' class='rounded-circle'></td>
                              <td align='center'><small><?= $mhs['nomor'] ?></small></td>
                              <td align='left'><span class=' badge rounded-pill bg-primary'><?= $mhs['namalengkap'] ?></span></td>
                              <td align='left'><small><?= $mhs['deptdesc'] ?></small></td>
                              <td align='left'><small><?= $mhs['jabdesc'] ?></small></td>
                              <td align='left'><small><?= $mhs['tglmasuk'] ?></small></td>
                              <td align='left'><small><?= $mhs['masakerja'] ?></small></td>
                              <td align='center'>
                                <button type='button'
                                  class='btn btn-info'
                                  data-bs-toggle='modal'
                                  data-bs-target='#scrollingModal'
                                  onclick='showUserDetails("<?= htmlspecialchars($mhs['nik']) ?>")'>
                                  <i class='bi bi-info-circle'></i>
                                </button>
                              </td>
                            </tr>
                          <?php $no++;
                          } ?>
                        </tbody>
                      </table>

                      <div class="modal fade" id="scrollingModal" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalTitle">Detail User Dengan NIK </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <label for="tampil_nik" class="font-bold">NIK</label>
                                <input type="text" class="form-control" placeholder="NIK" id="tampil_nik" readonly>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_namakaryawan">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" id="tampil_namakaryawan" readonly>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_orientasi" class="form-label">Training Orientasi</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Orientasi" id="tampil_tr_orientasi">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Orientasi" id="tampil_trdesc_orientasi">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_refreshing_course" class="form-label">Training Refreshing Course</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Refreshing Course" id="tampil_tr_refreshing_course">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Refreshing Course" id="tampil_trdesc_refreshing_course">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_qc_tingkat_dasar" class="form-label">Training QC Tingkat Dasar</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training QC Tingkat Dasar" id="tampil_tr_qc_tingkat_dasar">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training QC Tingkat Dasar" id="tampil_trdesc_qc_tingkat_dasar">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_qc_tingkat_menengah" class="form-label">Training QC Tingkat Menengah</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training QC Tingkat Menengah" id="tampil_tr_qc_tingkat_menengah">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training QC Tingkat Menengah" id="tampil_trdesc_qc_tingkat_menengah">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_qc_tingkat_lanjut" class="form-label">Training QC Tingkat Lanjut</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training QC Tingkat Lanjut" id="tampil_tr_qc_tingkat_lanjut">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training QC Tingkat Lanjut" id="tampil_trdesc_qc_tingkat_lanjut">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_proses" class="form-label">Training Proses</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Proses" id="tampil_tr_proses">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Proses" id="tampil_trdesc_proses">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_trainer" class="form-label">Training Trainer</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Trainer" id="tampil_tr_trainer">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Trainer" id="tampil_trdesc_trainer">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_lingkungan" class="form-label">Training Lingkungan</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Lingkungan" id="tampil_tr_lingkungan">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Lingkungan" id="tampil_trdesc_lingkungan">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_insidentil" class="form-label">Training Insidentil</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Insidentil" id="tampil_tr_insidentil">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Insidentil" id="tampil_trdesc_insidentil">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_p3k" class="form-label">Training P3K</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training P3K" id="tampil_tr_p3k">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training P3K" id="tampil_trdesc_p3k">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_smk3" class="form-label">Training SMK3</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training SMK3" id="tampil_tr_smk3">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training SMK3" id="tampil_trdesc_smk3">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_radio_aktif" class="form-label">Training Radio Aktif</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training Radio Aktif" id="tampil_tr_radio_aktif">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training Radio Aktif" id="tampil_trdesc_radio_aktif">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_sio" class="form-label">Training SIO</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training SIO" id="tampil_tr_sio">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training SIO" id="tampil_trdesc_sio">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_iso" class="form-label">Training ISO</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training ISO" id="tampil_tr_iso">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training ISO" id="tampil_trdesc_iso">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_sjh" class="form-label">Training SJH</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training SJH" id="tampil_tr_sjh">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training SJH" id="tampil_trdesc_sjh">
                                </div>
                              </div>
                              <div class="row mt-2">
                                <label for="tampil_tr_apar" class="form-label">Training APAR</label>
                                <div class="col-md-6">
                                  <input type="date" class="form-control" placeholder="Training APAR" id="tampil_tr_apar">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="Keterangan Training APAR" id="tampil_trdesc_apar">
                                </div>
                              </div>
                            </div>
                            <div class=" modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>



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