<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    function showUserDetails(nik) {
        document.getElementById('modalTitle').textContent = `Detail User Dengan NIK ${nik}`;
        document.getElementById('tampil_nik').value = nik;

        fetch('get_user_data.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `nik=${nik}`
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (Object.keys(data).length > 0) {
                    // Perbaiki ID HTML agar sesuai dengan kunci array dari PHP
                    document.getElementById('tampil_namakaryawan').value = data.namakaryawan || '';
                    document.getElementById('tampil_tr_orientasi').value = data.tr_orientasi || '';
                    document.getElementById('tampil_trdesc_orientasi').value = data.trdesc_orientasi || '';
                    document.getElementById('tampil_tr_refreshing_course').value = data.tr_refreshing_course || '';
                    document.getElementById('tampil_trdesc_refreshing_course').value = data.trdesc_refreshing_course || '';
                    document.getElementById('tampil_tr_qc_tingkat_dasar').value = data.tr_qcdasar || '';
                    document.getElementById('tampil_trdesc_qc_tingkat_dasar').value = data.trdesc_qcdasar || '';
                    document.getElementById('tampil_tr_qc_tingkat_menengah').value = data.tr_qcmenengah || '';
                    document.getElementById('tampil_trdesc_qc_tingkat_menengah').value = data.trdesc_qcmenengah || '';
                    document.getElementById('tampil_tr_qc_tingkat_lanjut').value = data.tr_qclanjut || '';
                    document.getElementById('tampil_trdesc_qc_tingkat_lanjut').value = data.trdesc_qclanjut || '';
                    document.getElementById('tampil_tr_proses').value = data.tr_proses || '';
                    document.getElementById('tampil_trdesc_proses').value = data.trdesc_proses || '';
                    document.getElementById('tampil_tr_trainer').value = data.tr_trainer || '';
                    document.getElementById('tampil_trdesc_trainer').value = data.trdesc_trainer || '';
                    document.getElementById('tampil_tr_lingkungan').value = data.tr_lingkungan || '';
                    document.getElementById('tampil_trdesc_lingkungan').value = data.trdesc_lingkungan || '';
                    document.getElementById('tampil_tr_insidentil').value = data.tr_insidentil || '';
                    document.getElementById('tampil_trdesc_insidentil').value = data.trdesc_insidentil || '';
                    document.getElementById('tampil_tr_p3k').value = data.tr_p3k || '';
                    document.getElementById('tampil_trdesc_p3k').value = data.trdesc_p3k || '';
                    document.getElementById('tampil_tr_smk3').value = data.tr_smk3 || '';
                    document.getElementById('tampil_trdesc_smk3').value = data.trdesc_smk3 || '';
                    document.getElementById('tampil_tr_radio_aktif').value = data.tr_radioaktif || '';
                    document.getElementById('tampil_trdesc_radio_aktif').value = data.trdesc_radioaktif || '';
                    document.getElementById('tampil_tr_sio').value = data.tr_sio || '';
                    document.getElementById('tampil_trdesc_sio').value = data.trdesc_sio || '';
                    document.getElementById('tampil_tr_iso').value = data.tr_iso || '';
                    document.getElementById('tampil_trdesc_iso').value = data.trdesc_iso || '';
                    document.getElementById('tampil_tr_sjh').value = data.tr_sjh || '';
                    document.getElementById('tampil_trdesc_sjh').value = data.trdesc_sjh || '';
                    document.getElementById('tampil_tr_apar').value = data.tr_apar || '';
                    document.getElementById('tampil_trdesc_apar').value = data.trdesc_apar || '';
                } else {
                    console.log('Data user tidak ditemukan.');
                    // Kosongkan semua input jika data tidak ditemukan
                    document.getElementById('tampil_nama').value = '';
                    document.getElementById('tampil_tr_orientasi').value = '';
                    document.getElementById('tampil_trdesc_orientasi').value = '';
                    document.getElementById('tampil_tr_refreshing_course').value = '';
                    document.getElementById('tampil_trdesc_refreshing_course').value = '';
                    document.getElementById('tampil_tr_qc_tingkat_dasar').value = '';
                    document.getElementById('tampil_trdesc_qc_tingkat_dasar').value = '';
                    document.getElementById('tampil_tr_qc_tingkat_menengah').value = '';
                    document.getElementById('tampil_trdesc_qc_tingkat_menengah').value = '';
                    document.getElementById('tampil_tr_qc_tingkat_lanjut').value = '';
                    document.getElementById('tampil_trdesc_qc_tingkat_lanjut').value = '';
                    document.getElementById('tampil_tr_proses').value = '';
                    document.getElementById('tampil_trdesc_proses').value = '';
                    document.getElementById('tampil_tr_trainer').value = '';
                    document.getElementById('tampil_trdesc_trainer').value = '';
                    document.getElementById('tampil_tr_lingkungan').value = '';
                    document.getElementById('tampil_trdesc_lingkungan').value = '';
                    document.getElementById('tampil_tr_insidentil').value = '';
                    document.getElementById('tampil_trdesc_insidentil').value = '';
                    document.getElementById('tampil_tr_p3k').value = '';
                    document.getElementById('tampil_trdesc_p3k').value = '';
                    document.getElementById('tampil_tr_smk3').value = '';
                    document.getElementById('tampil_trdesc_smk3').value = '';
                    document.getElementById('tampil_tr_radio_aktif').value = '';
                    document.getElementById('tampil_trdesc_radio_aktif').value = '';
                    document.getElementById('tampil_tr_sio').value = '';
                    document.getElementById('tampil_trdesc_sio').value = '';
                    document.getElementById('tampil_tr_iso').value = '';
                    document.getElementById('tampil_trdesc_iso').value = '';
                    document.getElementById('tampil_tr_sjh').value = '';
                    document.getElementById('tampil_trdesc_sjh').value = '';
                    document.getElementById('tampil_tr_apar').value = '';
                    document.getElementById('tampil_trdesc_apar').value = '';
                }
                const myModal = new bootstrap.Modal(document.getElementById('scrollingModal'));
                myModal.show();
            })
            .catch(error => {
                console.error('Ada kesalahan saat mengambil data:', error);
            });
    }
</script>