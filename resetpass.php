<?php
session_start();
session_regenerate_id();
include "db.php";

if(!isset($_SESSION['code'])):
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
                <input type="number" id="code" name="code" class="textinput" autocomplete="off" placeholder="رمز التحقق">
               <button>التحقق</button>
            </form><br>
            <a href="index.php">تسجيل الدخول</a>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"):
                $code = $_POST['code'];
                
               // enter email
               ?>
               <script>
               document.getElementById("code").value = "<?php echo $code ?>";
            </script>
            <?php
                if(empty($code)):
                    ?>
                    <div class="error">
                        يرجى ادخال رمز التحقق
                    </div>
                    <?php
                elseif($code == $_SESSION['code']):
                         $_SESSION['success'] = "";
               
               unset($_SESSION['code']);
               
               echo '<meta http-equiv="refresh" content="0;url=resetpassword.php">';
               
                else:
                    ?>
                    <div class="error">
                        رمز التحقق غير صحيح
                    </div>
                    <?php
                endif;
                
            endif;
            ?>
        </div>
    </body>
</html>