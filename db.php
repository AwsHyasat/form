<?php
$dbn = "mysql:host=localhost;dbname=id14871961_data";
$user = "id14871961_root";
$pass = "C*q|~2clwA+p!y?a";

try {
    
    $db = new PDO($dbn,$user,$pass);
    
}

catch(PDOException $e){
    echo "حدث خطأ في الاتصال بقاعدة البيانات";
}