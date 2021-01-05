<?php
session_start();
session_regenerate_id();
include "db.php";

if(!isset($_SESSION['success'])):
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
    exit;
endif;
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
            <h1>نسيت كلمة المرور</h1>
            <form method="post" novalidate>
              <input type="password"  name="pass" id="pass" class="textinput passinput" autocomplete="off" placeholder="كلمة المرور الجديدة">
                
               <span id="show" onclick="change()" style="top:75px">اظهار</span>
                 
               <button>تغيير كلمة المرور</button>
            </form><br>
            <a href="index.php">تسجيل الدخول</a>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"):
            $password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
            
            // enter password
            ?>
            <script>
            document.getElementById("pass").value = "<?php echo $_POST['pass'] ?>";
            </script>
            <?php
            
            // update password
            $stmt = $db->prepare("UPDATE accounts SET password = ? WHERE id = ?");
            $stmt->execute([$password,$_SESSION['id']]);
            
            session_unset();
            
            echo "تم تغيير كلمة المرور بنجاح" . '<meta http-equiv="refresh" content="1;url=index.php">';
        endif;
        ?>
        </div>
        <script src="theme/file.js"></script>
    </body>
</html>