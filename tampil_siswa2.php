<?php
// Create database connection using config file
include_once('koneksi.php');

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nis DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="tambah_siswa.php">Add New User</a><br/><br/>
<a href="halaman_admin.php">Halaman Admin</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>NIS</th> <th>NAMA</th> <th>KELAS</th> <th>JENIS KELAMIN</th><th>OPERASI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nis']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kelas']."</td>";  
		echo "<td>".$user_data['jns_kelamin']."</td>";   
        echo "<td><a href='edit_siswa2.php?id=$user_data[id]'>Edit</a> | <a href='delete_siswa2.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <p>&nbsp;</p>
    <a href="logout.php">LOGOUT</a>
</body>
</html>