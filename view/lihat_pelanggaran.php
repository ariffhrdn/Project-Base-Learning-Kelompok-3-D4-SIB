<?php
include '../config/database.php';

$query = "SELECT * FROM Pelanggaran";
$result = $db1->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Daftar Pelanggaran</h1>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pelanggaran</th>
                    <th>Jenis Pelanggaran</th>
                    <th>ID Tata Tertib</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ID_pelanggaran']; ?></td>
                        <td><?php echo $row['jenis_pelanggaran']; ?></td>
                        <td><?php echo $row['ID_tata_tertib']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
