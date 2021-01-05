<?php
session_start();
session_regenerate_id();
include "db.php";

if(!isset($_SESSION['email'])):
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
    exit;
endif;

$stmt = $db->prepare("SELECT * FROM accounts WHERE email = ?");
$stmt->execute([$_SESSION['email']]);
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>تسجيل الدخول</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme/style.css">
    </head>
    <body>
        <div class="form">
            <h1>الملف الشخصي</h1>
            <p>الاسم <br> <?php echo $rows['name'] ?> </p>
            <p>البريد الالكتروني <br> <?php echo $rows['email'] ?></p>
            <p><a href="changepass.php">تغيير كلمة المرور</a></p>
            <p><a href="logout.php">تسجيل الخروج</a></p>
        </div>
    </body>
</html>