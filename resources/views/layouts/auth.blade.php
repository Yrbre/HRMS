<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HRMS Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('adminlte3/hrms/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('adminlte3/hrms/assets/img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

    <!-- Vendor CSS Files -->
    @include('layouts.style')
    @livewireStyles
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                            <div class="text-center">
                                <img src="{{ asset('adminlte3/hrms/images/LogoTifico1.png') }}" class="mt-4x rounded mx-auto d-block" alt="Responsive image">
                            </div>
                            <!-- End Logo -->
                            <h6 class="text-center pb-0 fs-4 text-bold text-uppercase mt-2">PT. Tifico Fiber Indonesia, Tbk.</h6>

                            {{ $slot }}

                            <div class="credits">
                                Copyright 2025 - V1.0.0
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.script')

    <script>
        const notyf = new Notyf({
            duration: 3000,
            position: {
                x: 'right',
                y: 'top'
            }
        });

        // Listener untuk Livewire v3
        document.addEventListener('livewire:init', () => {
            Livewire.on('show-notyf', (data) => {
                if (data.type === 'success') {
                    notyf.success(data.message);
                } else {
                    notyf.error(data.message);
                }
            });
        });
    </script>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>