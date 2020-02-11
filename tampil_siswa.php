<?php
include 'koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nis DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>