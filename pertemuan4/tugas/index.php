<?php
if (isset($_COOKIE['email'])) {
    header("Location:app.php");
} else {
    header("Location:login.php");
} 
