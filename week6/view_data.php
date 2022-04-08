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
        <td>Edit | <a href="delete.php?id=<?php echo $data->id?>">Delete</a></td>
    </tr>
<?php
        $i++;
    }
?>
    </table>