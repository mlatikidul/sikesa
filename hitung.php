<html>
<head>
    <title>GET DATA with AJAX</title>
    <script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
    <script src="process.js"></script> <!-- Load file process.js -->
</head>
<body>
<h1>FORM SISWA</h1><hr>
<center><form>
<table>
  <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input type="text" name="nis" id="nis"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="text" name="jns_kelamin" id="jns_kelamin"></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input type="text" name="kelas" id="kelas"></td>
  </tr>
  <tr>
    <td>Lari 60 Meter</td>
    <td>:</td>
    <td><input type="text" name="lari60" id="lari60"></td>
  </tr>
  <tr>
    <td>Gantung Siku</td>
    <td>:</td>
    <td><input type="text" name="gantungsiku" id="gantungsiku"></td>
  </tr>
  <tr>
    <td>Baring Duduk</td>
    <td>:</td>
    <td><input type="text" name="baringduduk" id="baringduduk"></td>
  </tr>
  <tr>
    <td>Loncat Tegak</td>
    <td>:</td>
    <td><input type="text" name="loncattegak" id="loncattegak"></td>
  </tr>
  <tr>
    <td>Lari 1000 meter</td>
    <td>:</td>
    <td><input type="text" name="mlari1000" id="mlari10000">
    menit</td>
	<td><input type="text" name="dlari1000" id="dlari10000">Detik</td>
  </tr>
  <tr>
    <td> kesimpulan </td>
    <td> : </td>
    <td> Keterangan</td>
	<td> </td>
  </tr>
  <tr>
    <td><button type="button" id="btn-proses">Proses</button></td>
    
    <td></td>
	<td><button type="button" id="btn-simpan">Simpan</button></td>
  </tr>
</table>
</form></center>
</body>
</html>
