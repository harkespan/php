<?php
     include "../config/database.php";

     $db->query("DELETE FROM users WHERE id=".$_GET['id']);

     header("Location: view_data.php");
?>