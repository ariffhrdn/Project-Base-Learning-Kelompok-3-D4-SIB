<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
    $id_tata_tertib = $_POST['id_tata_tertib'];

    $query = "INSERT INTO Pelanggaran (jenis_pelanggaran, ID_tata_tertib) VALUES ('$jenis_pelanggaran', '$id_tata_tertib')";
    if ($db1->query($query) === TRUE) {
        echo "<div class='alert alert-success'>Pelanggaran berhasil ditambahkan!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $db1->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Tambah Pelanggaran</h1>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label>Jenis Pelanggaran:</label>
                <input type="text" name="jenis_pelanggaran" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID Tata Tertib:</label>
                <input type="number" name="id_tata_tertib" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
</body>
</html>
