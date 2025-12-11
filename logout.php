<?php
    session_start();
    session_destroy();
    // session_unset('username');
    header("Location: form.php");