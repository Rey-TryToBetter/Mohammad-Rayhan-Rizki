<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $subject = isset($_POST['subject']) ? mysqli_real_escape_string($conn, $_POST['subject']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : '';
    $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : '';

    $sql = "INSERT INTO contact_section (nama, email, subjek, telepon, pesan) 
            VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        error_log("Prepare failed: " . mysqli_error($conn));
        echo "<script>alert('Terjadi kesalahan persiapan query.'); window.location.href = 'index.php';</script>";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $phone, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href = 'index.php';</script>";
    } else {
        error_log("Database error: " . mysqli_stmt_error($stmt));
        echo "<script>alert('Terjadi kesalahan, coba lagi nanti.'); window.location.href = 'index.php';</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
