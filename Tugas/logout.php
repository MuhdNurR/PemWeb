<?php 
    // Mengaktifkan session
    session_start();
    
    // Menghapus semua session
    session_destroy();
    
    // Mengalihkan halaman sambil mengirim pesan logout
    header("location:login.php?pesan=logout");
?>