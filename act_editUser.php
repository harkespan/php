<?php
    include "koneksi.php";

    $usr = $_POST['username'];
    $paswd = $_POST['paswd'];
    $cpaswd = $_POST['cpaswd'];
    $active = $_POST['active'];
    $id = $_POST['id'];

    if($paswd == "")
    {
        $query = "UPDATE users SET username = ?, active = ? WHERE id = ?";
        $stmt = $koneksi->prepare($query);
        $stat = $stmt->execute([$usr,$active,$id]);
    }
    else
    {
        if($paswd == $cpaswd)
        {
            $npaswd = password_hash($paswd, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET username = ?, paswd = ?,active = ? WHERE id = ?";
            $stmt = $koneksi->prepare($sql);
            $stat = $stmt->execute([$usr,$npaswd,$active,$id]);
        }
        else
        {
            echo "<script>alert('Password dan Konfirmasi password harus sama');</script>";
        }
    }

    if($stat)
    {
       echo "<script>alert('Update user berhasil');</script>";
       header("Location: home.php?page=list");
    }
    else
    {
        echo "<script>alert('Update user gagal');
        history.go(-1)
        </script>";
    }


