
<?php
session_start();

// Memeriksa apakah data tersedia
if (!isset($_SESSION["mahasiswa"])) {
    header("Location: index.php");
    exit;
}

$data = $_SESSION["mahasiswa"];

// Mengamankan teks sebelum ditampilkan ke HTML
function aman($teks) {
    return htmlspecialchars(
        (string) $teks,
        ENT_QUOTES,
        "UTF-8"
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Mahasiswa</title>
</head>
<body>

    <h2>Data Diri Mahasiswa</h2>

    <p>Nama: <?= aman($data["nama"]) ?></p>
    <p>NIM: <?= aman($data["nim"]) ?></p>
    <p>Jurusan: <?= aman($data["jurusan"]) ?></p>

    <h3>Mata Kuliah</h3>

    <?php if (!empty($data["matakuliah"])): ?>
        <ul>
            <?php foreach ($data["matakuliah"] as $mk): ?>
                <li><?= aman($mk) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada mata kuliah yang dipilih.</p>
    <?php endif; ?>

    <h3>Hasil Nilai</h3>

    <p>Nilai: <?= aman($data["nilai"]) ?></p>

    <p>Status:
        <strong><?= aman($data["status"]) ?></strong>
    </p>

    <br>
    <a href="index.php">Kembali ke Form</a>

    <br><br>
    <a href="hapus.php">Hapus Data Session</a>

</body>
</html>
