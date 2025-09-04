<?php
$host = "localhost";
$port = "5432";
$dbname = "ukk_rafi";
$user = "postgres";
$password = "";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi sukses!";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
