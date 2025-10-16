<?php
include 'config-lokal.php';

// Pastikan skrip ini hanya berjalan jika ada permintaan POST
if (isset($_POST['nik'])) {
    $nik = $_POST['nik'];

    // Ambil semua kolom yang diperlukan dari tabel 'trainee'
    $sql = "SELECT nik, namakaryawan, deptdesc, deptcode, jab, jabdesc, joindate, 
            tr_orientasi, trdesc_orientasi, tr_refreshing_course, trdesc_refreshing_course, 
            tr_qcdasar, trdesc_qcdasar, tr_qcmenengah, trdesc_qcmenengah,
            tr_qclanjut, trdesc_qclanjut, tr_proses, trdesc_proses, tr_trainer,
            trdesc_trainer, tr_lingkungan, trdesc_lingkungan, tr_insidentil, trdesc_insidentil,
            tr_p3k, trdesc_p3k, tr_smk3, trdesc_smk3, tr_radioaktif, trdesc_radioaktif,
            tr_sio, trdesc_sio, tr_iso, trdesc_iso, tr_sjh, trdesc_sjh, tr_apar, trdesc_apar
            FROM trainee 
            WHERE nik = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nik);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    }

    $stmt->close();
    $conn->close();

    // Pastikan responsnya adalah JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Jika tidak ada NIK yang dikirim, kirimkan respons kosong
    header('Content-Type: application/json');
    echo json_encode([]);
}
