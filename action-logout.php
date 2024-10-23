<?php
session_start();
session_unset();
session_destroy();
echo "berhasil logout";
header("Location: web.php");
