<?php
    include "../config/database.php";

    $rs = $db->query("SELECT * FROM users");

    // $rs->setFetchMode(PDO::FETCH_ASSOC);
    $rs->setFetchMode(PDO::FETCH_OBJ);
?>
    <table border=1 cellspacing=0 cellpadding=0>
        <tr>
            <th>No</th>
            <th>username</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
<?php
    $i = 1;
    while($data = $rs->fetch())
    {
?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $data->username?></td>
        <td><?php echo $data->active==0?"Non Aktif":"Aktif"?></td>
        <td><a href="edit.php?id=<?php echo base64_encode(sha1(rand())."|".$data->id)?>">Edit</a> | <a href="delete.php?id=<?php echo base64_encode(sha1(rand())."|".$data->id)?>">Delete</a></td>
    </tr>
<?php
        $i++;
    }
?>
    </table>