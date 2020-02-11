<?php
// include database connection file
include_once('koneksi2.php');

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
	$jns_kelamin=$_POST['jns_kelamin'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE siswa SET nis='$nis',nama='$nama',kelas='$kelas',jns_kelamin='$jns_kelamin' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: tampil_siswa2.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nis = $user_data['nis'];
    $nama = $user_data['nama'];
    $kelas = $user_data['kelas'];
	$jns_kelamin = $user_data['jns_kelamin'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="tampil_siswa2.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_siswa2.php">
        <table border="0">
            <tr> 
                <td>NIS</td>
                <td><input type="text" name="nis" value=<?php echo $nis;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" value=<?php echo $kelas;?>></td>
            </tr>
			<tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jns_kelamin" value=<?php echo $jns_kelamin;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>