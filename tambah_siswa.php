<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="tampil_siswa2.php">Go to Home</a>
    <br/><br/>

    <form action="tambah_siswa.php" method="post" name="form1">
        <table width="25%" border="0">
		     <tr> 
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
			<tr> 
                <td>jenis kelamin</td>
                <td><input type="text" name="jns_kelamin"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
	    $id = $_POST['id'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
		$jns_kelamin = $_POST['jns_kelamin'];

        // include database connection file
        include_once("koneksi2.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO siswa(id,nis,nama,kelas,jns_kelamin) VALUES('$id','$nis','$nama','$kelas','$jns_kelamin')");

        // Show message when user added
        echo "User added successfully. <a href='tampil_siswa2.php'>View Users</a>";
    }
    ?>
</body>
</html>