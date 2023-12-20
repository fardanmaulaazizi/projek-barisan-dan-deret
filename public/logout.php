<?php
session_start();
$_SESSION["id"] = null;
session_destroy();
?>
<script>
    alert("Berhasil Logout");
    document.location = "login.php"
</script>