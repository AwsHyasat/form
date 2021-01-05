<?php
session_start();
session_regenerate_id();
session_unset();

header("LOCATION:index.php");
exit;