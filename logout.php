<?php
session_start();
session_unset();  // Menghapus semua variabel sesi
session_destroy();  // Menghancurkan sesi

// Mengarahkan kembali ke halaman login
header("Location: login.php");
exit;
?>
