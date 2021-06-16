<?php
session_start();
unset($_SESSION['FB_ID']);
unset($_SESSION['FB_NAME']);
?>
<script>
window.location.href='index.php';
</script>