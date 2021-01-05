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
    <body class="body">
        <div class="form">
            <h1>تسجيل الدخول</h1>
            <form method="post" novalidate>
                <input type="email" id="email" name="email" class="textinput" autocomplete="off" placeholder="البريد الالكتروني">
               <input type="password"  name="pass" id="pass" class="textinput passinput" autocomplete="off" placeholder="كلمة المرور">
                
                <span id="show" onclick="change()" style="top:127px">اظهار</span>
                 
                <br><a href="forgetpass.php">
                   هل نسيت كلمة المرور ؟
                </a>
                
               <button>تسجيل الدخول</button>
            </form><br>
            <a href="createaccount.php">
                أنشاء حساب
            </a>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"):
                $email = $_POST['email'];
                $pass = $_POST['pass'];
               $password = password_hash($pass,PASSWORD_DEFAULT);
               
               // enter information
              ?>
              <script>
              document.getElementById("email").value = "<?php echo $email ?>";
              
              document.getElementById("pass").value = "<?php echo $_POST['pass'] ?>";
              </script>
              <?php
 
                $stmt = $db->prepare("SELECT * FROM accounts WHERE email = ?");
                $stmt->execute([$email]);
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
               
               if(empty($email)):
                ?>
                <div class="error">
                    يرجى ادخال البريد الالكتروني
                </div>
                <?php
                elseif(empty($_POST['pass'])):
                ?>
                <div class="error">
                    يرجى ادخال كلمة المرور
                </div>
                <?php
                else:
                if($count > 0):
                    if(password_verify($pass,$rows['password'])):
                
               // update password
               $stmt = $db->prepare("UPDATE accounts SET password = ? WHERE id = ?");
              $stmt->execute([$password,$rows['id']]);
              
              $_SESSION['email'] = $email;
               
               echo '<meta http-equiv="refresh" content="0;url=home.php">';
                        
                else:
                ?>
                <div class="error">
                      كلمة المرور غير صحيحة
                </div>  
                    <?php
                    endif;
                    else:
                    ?>
                    <div class="error">
                     البريد الالكتروني غير صحيح
                    </div>
                    <?php
                endif;
                
                endif;
                
            endif;
            ?>
        </div>
        <script src="theme/file.js"></script>
    </body>
</html>
