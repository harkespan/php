<h4>Daftar User</h4>
    <a href="addUser.php" class="btn btn-primary">Tambah User</a>
    <table cellspacing=0 cellpadding=5 class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php 
            $rs = $koneksi->query("SELECT * FROM users");
            $users = $rs->fetchAll(PDO::FETCH_ASSOC);
            $i = 1;
            foreach($users as $user){
        ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['active'] == 1?"Aktif":"Tidak Aktif"?></td>
                <td>Edit | <a href="act_deleteUser.php?id=<?=$user['id']?>">Hapus</a></td>
            </tr>

        <?php
                $i++;
            }
        ?>
    </table>