<?php

// Memulai session
session_start();

// Hapus semua data di dalam session
session_destroy();

// Redirect ke halaman login.php
header("Location: login.php");
exit;

?>
