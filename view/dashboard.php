<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Tata Tertib</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/styledasboard.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tata Tertib</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="lihat_pelanggaran.php">Lihat Pelanggaran</a></li>
                <li class="nav-item"><a class="nav-link" href="tambah_pelanggaran.php">Tambah Pelanggaran</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-4">Dashboard Tata Tertib</h1>
            <p class="lead">Selamat datang di sistem pengelolaan tata tertib mahasiswa.</p>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lihat Pelanggaran</h5>
                        <p class="card-text">Lihat daftar pelanggaran yang telah tercatat dalam sistem.</p>
                        <a href="lihat_pelanggaran.php" class="btn btn-primary">Lihat Sekarang</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tambah Pelanggaran</h5>
                        <p class="card-text">Tambahkan data pelanggaran baru untuk mahasiswa.</p>
                        <a href="tambah_pelanggaran.php" class="btn btn-success">Tambah Sekarang</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Logout</h5>
                        <p class="card-text">Keluar dari sistem tata tertib.</p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container text-center">
            <span>&copy; 2024 Sistem Tata Tertib. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
