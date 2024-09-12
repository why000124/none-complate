<?php
session_start();

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินแล้วหรือไม่
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>ยินดีต้อนรับ, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">ออกจากระบบ</a>
</body>
</html>