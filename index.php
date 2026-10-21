
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>

    <h2>Input Data Mahasiswa</h2>

    <form action="proses.php" method="POST">

        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br><br>

        <label>NIM:</label>
        <input type="text" name="nim" required>
        <br><br>

        <label>Jurusan:</label>
        <br>

        <input type="radio" name="jurusan"
               value="Sistem Informasi" required>
        Sistem Informasi
        <br>

        <input type="radio" name="jurusan"
               value="Teknik Informatika">
        Teknik Informatika
        <br>

        <input type="radio" name="jurusan"
               value="Manajemen Informatika">
        Manajemen Informatika
        <br><br>

        <label>Mata Kuliah:</label>
        <br>

        <input type="checkbox" name="matakuliah[]"
               value="Pemrograman Web 2">
        Pemrograman Web 2
        <br>

        <input type="checkbox" name="matakuliah[]"
               value="Pemrograman Berorientasi Objek">
        Pemrograman Berorientasi Objek
        <br>

        <input type="checkbox" name="matakuliah[]"
               value="Basis Data">
        Basis Data
        <br>

        <input type="checkbox" name="matakuliah[]"
               value="Jaringan Komputer">
        Jaringan Komputer
        <br><br>

        <label>Masukkan Nilai:</label>
        <input type="number" name="nilai"
               min="0" max="100" required>
        <br><br>

        <button type="submit">Kirim Data</button>

    </form>

</body>
</html>
