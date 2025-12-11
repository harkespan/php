<?php
    $host = YOUR_DB_HOST;
    $userdb = YOUR_DB_USER;
    $passworddb = YOUR_DB_PASSWORD;

    try {
        $koneksi = new PDO("mysql:host=$host;dbname=dsn_harkespan_db",$userdb,$passworddb);
        $koneksi->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
    }
    catch(PDOException $e)
    {
        echo "Koneksi Gagal ",$e->getMessage();
    }