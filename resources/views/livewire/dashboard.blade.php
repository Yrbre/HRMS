<div>

    <section class="section dashboard">
        <div class="row">
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Proper</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Labor Supply</button>
                </li>
            </ul>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="row">


                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Karyawan</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-fingerprint" style=" color:#4154f1;"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalKaryawan }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span> <span class="text-muted small pt-2 ps-1">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Permanent</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalPermanent }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Outsource</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalOutsource }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Probation</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalProbation }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Trainee</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-medical"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalTrainee }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Others</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-code"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalOthers }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Trend Pergerakan Karyawan<span>/ per bulan</span></h5>
                                    <div class="d-flex justify-content-end mb-2">
                                        <span class="nav-item dropdown pe-3">
                                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <span class="d-none d-md-block dropdown-toggle ps-2">
                                                    <i class="ri-filter-2-line"></i> Filter Tahun: <strong>{{ $selectedYear }}</strong>
                                                </span>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" id="filterDropdownMenu">
                                                <li class="dropdown-header">
                                                    <h6>Pilih Tahun</h6>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>

                                                @foreach($availableYears as $year)
                                                <li>
                                                    <div class="form-check p-2">
                                                        <input class="form-check-input" type="radio" name="yearFilter"
                                                            id="year{{ $year }}" value="{{ $year }}"
                                                            wire:model.live="selectedYear"> <label class="form-check-label" for="year{{ $year }}">
                                                            {{ $year }}
                                                        </label>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </span>
                                    </div>

                                    <!-- Line Chart -->
                                    <div wire:ignore id="reportsChart"></div>
                                    @push('scripts')

                                    <script>
                                        // Deklarasikan variabel chart di luar agar bisa diakses nanti
                                        let reportsChart;

                                        document.addEventListener('livewire:initialized', () => {
                                            const options = {
                                                series: [{
                                                    name: 'Total',
                                                    data: @json($dataTotal)
                                                }, {
                                                    name: 'Permanent',
                                                    data: @json($dataPermanent)
                                                }, {
                                                    name: 'Outsource',
                                                    data: @json($dataOutsource)
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                xaxis: {
                                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#2eca6a', '#4154f1', '#ff771d'], // Sesuaikan warna jika perlu
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
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            };

                                            // Buat instance chart baru saat halaman pertama kali dimuat
                                            reportsChart = new ApexCharts(document.querySelector("#reportsChart"), options);
                                            reportsChart.render();

                                            // [BARU] Dengarkan event 'updateChart' dari Livewire
                                            Livewire.on('updateChart', (event) => {
                                                const chartData = event[0]; // Di Livewire 3, data ada di event[0]

                                                // Gunakan method updateSeries dari ApexCharts untuk memperbarui data tanpa reload halaman
                                                reportsChart.updateSeries([{
                                                        data: chartData.dataTotal
                                                    },
                                                    {
                                                        data: chartData.dataPermanent
                                                    },
                                                    {
                                                        data: chartData.dataOutsource
                                                    }
                                                ]);
                                            });
                                        });
                                    </script>


                                    @endpush


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body pb-0">


                        <h5 class="card-title">Komposisi Usia <span>| Karyawan </span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                        @push('scripts')
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {

                                const chartData = @json($chartData);

                                // 2. Inisialisasi dan set opsi ECharts
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item',
                                        // Menambahkan formatter untuk tooltip agar lebih informatif
                                        formatter: '{a} <br/>{b} : {c} ({d}%)'
                                    },
                                    legend: {
                                        orient: 'vertical', // Mengubah ke vertikal agar lebih rapi
                                        left: 'left',
                                        data: chartData.map(item => item.name) // Ambil nama dari data
                                    },
                                    series: [{
                                        name: 'Kelompok Usia',
                                        type: 'pie',
                                        radius: ['20%', '55%'],
                                        center: ['50%', '50%'],
                                        avoidLabelOverlap: false,
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '12',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: true
                                        },
                                        label: {
                                            // Anda bisa menyederhanakan label ini agar tidak terlalu kompleks
                                            formatter: '{b}: {c} ({d}%)',
                                            backgroundColor: '#F6F8FC',
                                            borderColor: '#8C8D8E',
                                            borderWidth: 1,
                                            borderRadius: 4,
                                            padding: [4, 4],
                                        },
                                        // *** Data dinamis dari Livewire dimasukkan di sini ***
                                        data: chartData
                                    }]
                                });
                            });
                        </script>
                        @endpush
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Monitoring Pensiun <span>| Karyawan</span></h5>
                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label"><span class="badge bg-danger fs-6"> 57 </span></div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    <a href="#" class="fw-bold text-dark">{{ $countU2 }}</a> Karyawan
                                </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label"><span class="badge bg-warning fs-6"> 56 </span></div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    <a href="#" class="fw-bold text-dark">{{ $countU3 }}</a> Karyawan
                                </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label"><span class="badge bg-info fs-6"> 55 </span></div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    <a href="#" class="fw-bold text-dark">{{ $countU4 }}</a> Karyawan
                                </div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label"><span class="badge bg-primary fs-6"> 50-54 </span></div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    <a href="#" class="fw-bold text-dark">{{ $countU5 }}</a> Karyawan
                                </div>
                            </div>
                        </div>
                    </div>

                </div>






    </section>

</div>