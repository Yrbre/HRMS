<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HRMS360</title>
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
  
</head>

<body>
  <!-- link to header and navbar ----------------------
<?php 
   include('includes/header.php');
   include('includes/navbar.php');       
   include('includes/database.php');   
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
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
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
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Karyawan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-fingerprint"></i>
                    </div>
                    <div class="ps-3">        
                      <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as N1 from employee");
                        $data = mysqli_fetch_assoc($sql);
                      ?>                        
                      <h6><?php echo isset($data['N1']) ? $data ['N1'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">Active</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
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
                  <h5 class="card-title">Permanent</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as P1 from employee where jkdesc ='Permanent'");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                      <h6><?php echo isset($data['P1']) ? $data ['P1'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">.</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

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
                  <h5 class="card-title">Outsource</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as P2 from employee where jkdesc ='Outsource'");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                      <h6><?php echo isset($data['P2']) ? $data ['P2'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">.</span>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- End Customers Card -->

            <!-- Anggota Card -->
             <div class="col-xxl-4 col-md-6">
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
                </div>

                <div class="card-body">
                  <h5 class="card-title">Probation</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-bookmark"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as P3 from employee where jkdesc ='Probation'");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                      <h6><?php echo isset($data['P3']) ? $data ['P3'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">.</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Anggota Card -->

            <!-- Volume Usaha Card -->
             <div class="col-xxl-4 col-md-6">
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
                </div>

                <div class="card-body">
                  <h5 class="card-title">Trainee</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-medical"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as P4 from employee where jkdesc ='Trainee'");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                      <h6><?php echo isset($data['P4']) ? $data ['P4'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">.</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End VolumeUsaha Card -->
            
            <!-- Total Aset Card -->
            <div class="col-xxl-4 col-md-6">
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
                </div>

                <div class="card-body">
                  <h5 class="card-title">Others</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-code"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                        $sql = mysqli_query($mysqli,"select count(nik) as P5 from employee where jkdesc in ('Other','Contract')");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                      <h6><?php echo isset($data['P5']) ? $data ['P5'] : '';  ?></h6>
                      <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">.</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End TotalASet Card -->


            <!-- Reports -->
            <div class="col-12">
              <div class="card">

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
                  <h5 class="card-title">Trend Pergerakan Karyawan<span>/ per bulan tahun 2025</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Total',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Proper',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Outsource',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'month',
                          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MMM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

          <!-- Jabatan Card -->
          <div class="col-xxl-12 col-md-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Komposisi Jabatan</h5>
                  <?php 
                        $sqlj1 = mysqli_query($mysqli,"SELECT count(nik) as J1 FROM employee where jab = 'O1'");
                        $dataj1 = mysqli_fetch_assoc($sqlj1);
                        $sqlj2 = mysqli_query($mysqli,"SELECT count(nik) as J2 FROM employee where jab = 'O2'");
                        $dataj2 = mysqli_fetch_assoc($sqlj2);
                        $sqlj3 = mysqli_query($mysqli,"SELECT count(nik) as J3 FROM employee where jab = 'S1'");
                        $dataj3 = mysqli_fetch_assoc($sqlj3);
                        $sqlj4 = mysqli_query($mysqli,"SELECT count(nik) as J4 FROM employee where jab = 'S2'");
                        $dataj4 = mysqli_fetch_assoc($sqlj4);
                        $sqlj5 = mysqli_query($mysqli,"SELECT count(nik) as J5 FROM employee where jab = 'AM'");
                        $dataj5 = mysqli_fetch_assoc($sqlj5);
                        $sqlj6 = mysqli_query($mysqli,"SELECT count(nik) as J6 FROM employee where jab = 'MGR'");
                        $dataj6 = mysqli_fetch_assoc($sqlj6);
                        $sqlj7 = mysqli_query($mysqli,"SELECT count(nik) as J7 FROM employee where jab = 'GM'");
                        $dataj7 = mysqli_fetch_assoc($sqlj7);
                  ?>
                  <!-- Start Graf -->
                  <div id="budgetChart1" style="min-height: 275px;" class="echart"></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        var budgetChart = echarts.init(document.querySelector("#budgetChart1")).setOption({
                            tooltip: {
                              trigger: 'item',
                              formatter: '{a} <br/>{b} : {c} ({d}%)'
                            },
                            legend: {
                              orient: 'vertical',
                              right: '10',
                              top: '50',
                              data: [
                                'Operator',
                                'Operator Leader',
                                'Supervisor',
                                'Superintendent',
                                'Ast. Manager',
                                'Manager',
                                'GM'
                              ]
                            },
                            toolbox: {
                              show: true,
                              feature: {
                                mark: { show: true },
                                dataView: { show: true, readOnly: false },
                                restore: { show: true },
                                saveAsImage: { show: true }
                              }
                            },
                            series: [
                              {
                                name: 'Jabatan',
                                type: 'pie',
                                radius: [35, 100],
                                center: ['40%', '40%'],
                                roseType: 'area',
                                itemStyle: {
                                  borderRadius: 25
                                },
                                label: {
        formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
        backgroundColor: '#F6F8FC',
        borderColor: '#8C8D8E',
        borderWidth: 1,
        borderRadius: 4,
        rich: {
          a: {
            color: '#6E7079',
            lineHeight: 22,
            align: 'center'
          },
          hr: {
            borderColor: '#8C8D8E',
            width: '100%',
            borderWidth: 1,
            height: 0
          },
          b: {
            color: '#4C5058',
            fontSize: 14,
            fontWeight: 'bold',
            lineHeight: 33
          },
          per: {
            color: '#fff',
            backgroundColor: '#4C5058',
            padding: [3, 4],
            borderRadius: 4
          }
        }
      },
                                data: [
                                  { value: <?php echo isset($dataj1['J1']) ? $dataj1 ['J1'] : '';  ?>, name: 'Operator' },
                                  { value: <?php echo isset($dataj2['J2']) ? $dataj2 ['J2'] : '';  ?>, name: 'Operator Leader' },
                                  { value: <?php echo isset($dataj3['J3']) ? $dataj3 ['J3'] : '';  ?>, name: 'Supervisor' },
                                  { value: <?php echo isset($dataj4['J4']) ? $dataj4 ['J4'] : '';  ?>, name: 'Superintendent' },
                                  { value: <?php echo isset($dataj5['J5']) ? $dataj5 ['J5'] : '';  ?>, name: 'Ast. Manager' },
                                  { value: <?php echo isset($dataj6['J6']) ? $dataj6 ['J6'] : '';  ?>, name: 'Manager' },
                                  { value: <?php echo isset($dataj7['J7']) ? $dataj7 ['J7'] : '';  ?>, name: 'GM' }        
                                ],
                              }
                            ]
                          });
                        });
                    </script>                    
                  <!-- End Graf -->
                  </div>
              </div>
            </div>
            <!-- End jabatan Card -->

            <!-- Jabatan Card -->
          <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="badge bg-primary">Operator</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj1['J1']) ? $dataj1 ['J1'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-success">Operator Leader</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj2['J2']) ? $dataj2 ['J2'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-warning">Supervisor</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj3['J3']) ? $dataj3 ['J3'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-danger">Superintendent</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj4['J4']) ? $dataj4 ['J4'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-info">Asistant Manager</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj5['J5']) ? $dataj5 ['J5'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-success">Manager</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj6['J6']) ? $dataj6 ['J6'] : '';  ?></span></td>
                      </tr>
                      <tr>
                        <td><span class="badge bg-danger">General Manager</span></td>
                        <td><span class="badge bg-dark"><?php echo isset($dataj7['J7']) ? $dataj7 ['J7'] : '';  ?></span></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  </div>
              </div>
            </div>
            <!-- End jabatan Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
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
                  <h5 class="card-title">Grafik2</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-emoji-heart-eyes"></i>
                    </div>
                    <div class="ps-3">
                      <h6>550</h6>
                      <span class="text-success small pt-1 fw-bold">38%</span> <span class="text-muted small pt-2 ps-1">Orang</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
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
                  <h5 class="card-title">Grafik3</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-emoji-heart-eyes"></i>
                    </div>
                    <div class="ps-3">
                      <h6>550</h6>
                      <span class="text-success small pt-1 fw-bold">38%</span> <span class="text-muted small pt-2 ps-1">Orang</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
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
                  <h5 class="card-title">Grafik4</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-emoji-heart-eyes"></i>
                    </div>
                    <div class="ps-3">
                      <h6>550</h6>
                      <span class="text-success small pt-1 fw-bold">38%</span> <span class="text-muted small pt-2 ps-1">Orang</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

           
            
            
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







        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
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
              <h5 class="card-title">Monitoring Pensiun <span>| Karyawan</span></h5>
              <div class="activity">

              <div class="activity-item d-flex">
                      <?php 
                        $sql = mysqli_query($mysqli,"SELECT count(nik) as U2 FROM employee where umur_thn = 57");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="activite-label"><span class="badge bg-danger  fs-6"> 57 </span></div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content"> 
                  <a href="#" class="fw-bold text-dark"><?php echo isset($data['U2']) ? $data ['U2'] : '';  ?></a> Karyawan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                      <?php 
                        $sql = mysqli_query($mysqli,"SELECT count(nik) as U3 FROM employee where umur_thn = 56");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="activite-label"><span class="badge bg-warning  fs-6"> 56 </span></div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                  <a href="#" class="fw-bold text-dark"><?php echo isset($data['U3']) ? $data ['U3'] : '';  ?></a> Karyawan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                      <?php 
                        $sql = mysqli_query($mysqli,"SELECT count(nik) as U4 FROM employee where umur_thn = 55");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="activite-label"><span class="badge bg-info  fs-6"> 55 </span></div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                  <a href="#" class="fw-bold text-dark"><?php echo isset($data['U4']) ? $data ['U4'] : '';  ?></a> Karyawan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                      <?php 
                        $sql = mysqli_query($mysqli,"SELECT count(nik) as U5 FROM employee where umur_thn between 50 and 54");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="activite-label"><span class="badge bg-primary  fs-6"> 50-54 </span></div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                  <a href="#" class="fw-bold text-dark"><?php echo isset($data['U5']) ? $data ['U5'] : '';  ?></a> Karyawan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                <?php 
                        $sql = mysqli_query($mysqli,"SELECT count(nik) as U6 FROM employee where umur_thn < 50");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="activite-label"><span class="badge bg-success fs-6"> < 49 </span></div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                  <a href="#" class="fw-bold text-dark"><?php echo isset($data['U6']) ? $data ['U6'] : '';  ?></a> Karyawan
                  </div>
                </div><!-- End activity item-->
              </div>

            </div>
          </div><!-- End Recent Activity -->

          
          <!-- Website Traffic -->
          <div class="card">
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
              <?php 
                        $sql1 = mysqli_query($mysqli,"SELECT count(nik) as A1 FROM employee where umur_thn =56");
                        $data1 = mysqli_fetch_assoc($sql1);
                        $sql2 = mysqli_query($mysqli,"SELECT count(nik) as A2 FROM employee where umur_thn <50 ");
                        $data2 = mysqli_fetch_assoc($sql2);
                        $sql3 = mysqli_query($mysqli,"SELECT count(nik) as A3 FROM employee where umur_thn between 50 and 54 ");
                        $data3 = mysqli_fetch_assoc($sql3);
                        $sql4 = mysqli_query($mysqli,"SELECT count(nik) as A4 FROM employee where umur_thn =57");
                        $data4 = mysqli_fetch_assoc($sql4);
                        $sql5 = mysqli_query($mysqli,"SELECT count(nik) as A5 FROM employee where umur_thn =55");
                        $data45= mysqli_fetch_assoc($sql5);
                        $sql6 = mysqli_query($mysqli,"SELECT count(nik) as A6 FROM employee where umur_thn >57");
                        $data6= mysqli_fetch_assoc($sql6);
              ?>
              
              <h5 class="card-title">Komposisi Usia <span>| Produktivitas Karyawan </span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>             

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                     top: '2%',
                     left: 'center'
                    },
                    series: [{
                      name: 'Kelompok Usia',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      center: ['50%', '50%'],                      
                      avoidLabelOverlap: false,                      
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{ value: <?php echo isset($data3['A3']) ? $data3 ['A3'] : '';  ?>, name: 'MPP' },
                             { value: <?php echo isset($data2['A2']) ? $data2 ['A2'] : '';  ?>, name: 'Produktif' },
                             { value: <?php echo isset($data1['A1']) ? $data1 ['A1'] : '';  ?>, name: 'Y-1' },
                             { value: <?php echo isset($data4['A4']) ? $data4 ['A4'] : '';  ?>, name: 'Pensiun' },
                             { value: <?php echo isset($data1['A1']) ? $data1 ['A1'] : '';  ?>, name: 'Y-2' }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- List Karyawan Pensiun Bulan ini -->
          <div class="card">
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
              <h5 class="card-title">Karyawan Pensiun <span>| Bulan ini</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/04202.EDT.png" alt="">
                  <h4><a href="#">Samsudin</a></h4>
                  <p>Filament YS 46 tahun 11 bulan 24 hari..</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/03753.EDT.png" alt="">
                  <h4><a href="#">Ahmad Fudholi</a></h4>
                  <p>Polymer CP 46 tahun 11 bulan 2 hari...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/03702.EDT.png" alt="">
                  <h4><a href="#">Maryanah</a></h4>
                  <p>Inspection FY3 46 tahun 11 bulan 9 hari...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->




          <!-- Budget Report -->
          <div class="card">
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
              <h5 class="card-title">Perbandingan<span>| Karyawan</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Jml Koperasi', 'Jml Anggota']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Pinang',
                          max: 6500
                        },
                        {
                          name: 'Cipondoh',
                          max: 16000
                        },
                        {
                          name: 'Karawaci',
                          max: 30000
                        },
                        {
                          name: 'Larangan',
                          max: 38000
                        },
                        {
                          name: 'Neglasari',
                          max: 52000
                        },
                        {
                          name: 'Jati Uwung',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Jml Koperasi'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Jml Anggota'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          
          <!-- News & Updates Traffic -->
          <div class="card">
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
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php 
   include('includes/scripts.php'); 
   include('includes/footer.php');  
  ?>
  
</body>

</html>