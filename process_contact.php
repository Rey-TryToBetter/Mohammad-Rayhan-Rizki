<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_section (name, email, subject, phone, message) 
            VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $phone, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href = 'index.php';</script>";
    } else {
        error_log("Database error: " . mysqli_error($conn));
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