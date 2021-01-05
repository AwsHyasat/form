<?php
session_start();
session_regenerate_id();
include "db.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>أنشاء الحساب</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme/style.css">
    </head>
    <body>
        <div class="form">
            <h1>انشاء حساب</h1>
            <form method="post" novalidate>
                <input class="textinput" name="name" autocomplete="off" id="user" placeholder="اسم المستخدم">
                <input type="email" id="email" class="textinput" autocomplete="off" name="email" placeholder="البريد الالكتروني">
                <input type="password"  name="pass" id="pass" class="textinput passinput" autocomplete="off" placeholder="كلمة المرور">
                
                <span id="show" onclick="change()">اظهار</span>
                
               <button>
                   انشاء الحساب</button>
            </form><br> 
            <a href="index.php">
                تسجيل الدخول
            </a>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"):
                // var 
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
               
               // enter information
              ?>
              <script>
              document.getElementById("user").value = "<?php echo $name ?>";
              
              document.getElementById("email").value = "<?php echo $email ?>";
              
              document.getElementById("pass").value = "<?php echo $_POST['pass'] ?>";
              </script>
              <?php
              if(empty($name)):
                  ?>
                  <div class="error">
                      يرجى ادخال أسم المستخدم
                  </div>
                  <?php
                  
                  elseif(strlen($name) > 16):
                   ?>
                   <div class="error">
                       يمنع كتابة أسم مستخدم اكبر من 16 حرف
                   </div>
                   <?php
                      
                    elseif(empty($email)):
                    ?>
                    <div class="error">
                        يرجى ادخال بريد الكتروني
                    </div>
                    <?php
                     elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)):
                    ?>
                     <div class="error">
                         البريد الالكتروني غير صالح
                     </div>    
                <?php
                elseif(empty($_POST['pass'])):
                ?>
                <div class="error">
                يرجى ادخال كلمة المرور
                </div>
                <?php
                else:
                $stmt = $db->prepare("SELECT * FROM accounts WHERE email = ?");
                $stmt->execute([$email]);
                $count = $stmt->rowCount();
                
                if($count > 0):
                   ?>
                   <div class="error">
                       البريد الالكتروني هذا موجود من قبل
                   </div>
                   <?php
                 
                 else:
                 
                 // insert data
                 $stmt = $db->prepare("INSERT INTO accounts
               (name,email,password)
                 VALUES
                 (:name,:email,:pass)");
                 $stmt->execute([
                     "name" => $name,
                     "email" => $email,
                     "pass" => $password
                     ]);
               
               $_SESSION['email'] = $email;
                     
                echo '<meta http-equiv="refresh" content="0;url=home.php">';
               endif;
              
              endif;
                
            endif;
            ?>
        </div>
        <script src="theme/file.js"></script>
    </body>
</html>