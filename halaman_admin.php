<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<?php
// Create database connection using config file
include_once('koneksi2.php');

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY nis DESC");
?>
	<h1>Halaman Admin</h1>
	
	
	
	

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	
	<a href="tambah_siswa.php">Add New User</a><br/><br/>
	<a href="hitung.php">INPUT NILAI</a><br/><br/>
	
	 <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nis']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kelas']."</td>";    
        echo "<td><a href='edit_siswa2.php?id=$user_data[id]'>Edit</a> | <a href='delete_siswa2.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>