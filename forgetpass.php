<?php
session_start();
session_regenerate_id();
include "db.php";
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
                <input type="email" id="email" name="email" class="textinput" autocomplete="off" placeholder="البريد الالكتروني">
               <button>التالي</button>
            </form><br>
            <a href="index.php">تسجيل الدخول</a>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"):
            $email = $_POST['email'];
            
            // enter email
            ?>
            <script>
            document.getElementById("email").value = "<?php echo $email ?>";
            </script>
            <?php
            $stmt = $db->prepare("SELECT * FROM accounts WHERE email = ?");
                $stmt->execute([$email]);
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
              
            if(empty($email)): ?>
               <div class="error">
                   يرجى ادخال البريد الالكتروني
               </div>
               <?php
            elseif($count > 0):
               
               // get id
               $_SESSION['id'] = $rows['id'];
               
               // rand code
                $_SESSION['code'] = rand(1000,9999);
               
               // email information
               $to = $email;
               $subject = "رمز التحقق";
               $message = "رمز التحقق : " . $_SESSION['code'];
               
               // send email
               mail($to,$subject,$message);
               
               echo '<meta http-equiv="refresh" content="0;url=resetpass.php">';
            else:
                ?>
                <div class="error">
                    البريد الالكتروني غير صحيح
                </div>
                <?php
            endif;
            
        endif;
        ?>
        </div>
    </body>
</html>