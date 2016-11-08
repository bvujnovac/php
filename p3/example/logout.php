<?php
session_start();
session_destroy();
//echo 'You have been logged out. <a href="/p3/example/admin.php">Go back</a>';
header("Location: /p3/example/admin.php",TRUE,307);