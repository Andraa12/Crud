<!DOCTYPE html>
<html>
<head>
 <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="judul"> 
 <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
 <h2>Menampilkan data dari database</h2>
 <h3>www.malasngoding.com</h3>
 </div>
 <br/>
 
  
 if(isset($_GET['pesan'])){
 $pesan = $_GET['pesan'];
 if($pesan == "input"){
 echo "Data berhasil di input.";
 }else if($pesan == "update"){
 echo "Data berhasil di update.";
 }else if($pesan == "hapus"){
 echo "Data berhasil di hapus.";
 }
 }
 ?>
 <br/>
 <a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
 <h3>Data user</h3>
 <table border="1" class="table">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Pekerjaan</th>
 <th>Opsi</th> 
 </tr>
  
 include "koneksi.php";
 $query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
 $nomor = 1;
 while($data = mysql_fetch_array($query_mysql)){
 ?>
 <tr>
 <td> echo $nomor++; ?></td>
 <td> echo $data['nama']; ?></td>
 <td> echo $data['alamat']; ?></td>
 <td> echo $data['pekerjaan']; ?></td>
 <td>
 <a class="edit" href="edit.php?id= echo $data['id']; ?>">Edit</a> |
 <a class="hapus" href="hapus.php?id= echo $data['id']; ?>">Hapus</a> 
 </td>
 </tr>
  } ?>
 </table>
</body>
</html>

<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
 <table border="1" class="table">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Pekerjaan</th>
 <th>Opsi</th> 
 </tr>
  
 include "koneksi.php";
 $query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
 $nomor = 1;
 while($data = mysql_fetch_array($query_mysql)){
 ?>
 <tr>
 <td> echo $nomor++; ?></td>
 <td> echo $data['nama']; ?></td>
 <td> echo $data['alamat']; ?></td>
 <td> echo $data['pekerjaan']; ?></td>
 <td>
 <a class="edit" href="edit.php?id= echo $data['id']; ?>">Edit</a> |
 <a class="hapus" href="hapus.php?id= echo $data['id']; ?>">Hapus</a> 
 </td>
 </tr>
  } ?>
</table>
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<tr>
 <td> echo $nomor++; ?></td>
 <td> echo $data['nama']; ?></td>
 <td> echo $data['alamat']; ?></td>
 <td> echo $data['pekerjaan']; ?></td>
 <td>
 <a class="edit" href="edit.php?id= echo $data['id']; ?>">Edit</a> |
 <a class="hapus" href="hapus.php?id= echo $data['id']; ?>">Hapus</a> 
 </td>
</tr>
 } ?>
 while($data = mysql_fetch_array($query_mysql)){
?>
 <tr>
 <td> echo $nomor++; ?></td>
 <td> echo $data['nama']; ?></td>
 <td> echo $data['alamat']; ?></td>
 <td> echo $data['pekerjaan']; ?></td>
 <td>
 <a class="edit" href="edit.php?id= echo $data['id']; ?>">Edit</a> |
 <a class="hapus" href="hapus.php?id= echo $data['id']; ?>">Hapus</a> 
 </td>
 </tr>
 } ?>
 <td> echo $data['nama']; ?></td>
<td> echo $data['alamat']; ?></td>
<td> echo $data['pekerjaan']; ?></td>
<a class="edit" href="edit.php?id= echo $data['id']; ?>">Edit</a> |
<a class="hapus" href="hapus.php?id= echo $data['id']; ?>">Hapus</a>