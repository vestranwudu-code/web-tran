
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$nama = $_POST["nama"] ?? "";
$nim = $_POST["nim"] ?? "";
$jurusan = $_POST["jurusan"] ?? "";
$matakuliah = $_POST["matakuliah"] ?? [];
$nilai = $_POST["nilai"] ?? "";

// Validasi nilai
if (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
    exit("Nilai harus berupa angka dari 0 sampai 100.");
}

// Menentukan kelulusan
$status = ($nilai > 65) ? "Lulus" : "Tidak Lulus";

// Mengirim data ke halaman hasil
session_start();

$_SESSION["mahasiswa"] = [
    "nama" => $nama,
    "nim" => $nim,
    "jurusan" => $jurusan,
    "matakuliah" => is_array($matakuliah)
        ? $matakuliah : [],
    "nilai" => $nilai,
    "status" => $status
];

header("Location: hasil.php");
exit;
?>
