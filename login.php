<?php
session_start();
include 'config.php'; // ไฟล์เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    dd($username);

    // ป้องกัน SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // เข้ารหัสรหัสผ่าน (ในที่นี้ใช้ md5 สำหรับตัวอย่าง แต่แนะนำให้ใช้ bcrypt หรือ hashing ที่ปลอดภัยกว่านี้)

    // ตรวจสอบข้อมูลในฐานข้อมูล
    $sql = "SELECT id FROM users WHERE username='$username' AND password='$hashed_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // เข้าสู่ระบบสำเร็จ
    } else {
        echo "Invalid username or password";
    }  
}
?>