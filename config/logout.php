<?php
session_start();

// Hapus data session
session_destroy();

// Redirect ke halaman login
header("Location: ../views/login.php");
exit();
