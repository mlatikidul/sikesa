<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:80%; height:475px;">
<font color="orange" size="3">Hasil Tampil Data</font>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FF6600">
    <th width="5">No</td> 
    <th width="80" height="42">NIS</td> 
    <th width="160">Nama Siswa</td> 
    <th width="70">Kelas</td>       
    <th width="60">Jenis Kelamin</td> 
    <th width="60">Lari 60	</td>     
</tr>
<?php
    include 'koneksi.php';
    $Cari="SELECT * FROM siswa ORDER BY nis";
    $Tampil = mysqli_query($Cari);
    $nomer=0;
    while (    $hasil = mysqli_fetch_array ($Tampil)) {
            $nis    = stripslashes ($hasil['nis']);
            $nama             = stripslashes ($hasil['nama']);
            $kelas         = stripslashes ($hasil['kelas']);
            $jk         = stripslashes ($hasil['jk']);
            $lari60         = stripslashes ($hasil['lari60']);
        {
    $nomer++;
?>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
    <tr align="center">
        <td height="32"><?=$nomer?></td>
        <td><?=$nis?></td>
        <td><?=$nama?></td>
        <td><?=$kelas?></td>
        <td><?=$jk?></td>
        <td><?=$lari60?></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td> 
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
<?php  
        }
    }
    mysqli_close($Open);
?>
</table>
</div>