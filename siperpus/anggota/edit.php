<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = mysqli_query($koneksi, "SELECT * FROM anggota INNER JOIN level on anggota.id_level = level.id_level where id_anggota = $id_anggota");
$anggota = mysqli_fetch_assoc($sql);

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card" style="width:70rem">
			<center>
				<div class="card-header" style="width:70rem">
					<h2 class="card-header"><i class="fa fa-user-edit"></i>&nbspEdit Anggota</h2>
				</div>
				<div class="card-body">
					<form method="post" action="proses-edit.php">
					<table class="table">
						<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'];?>">
						<tr>
							<td style="width:27rem">Nama</td>
							<td><input type="text" name="nama" value="<?= $anggota['nama'];?>"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="text" name="kelas" value="<?= $anggota['kelas'];?>"></td>
						</tr>
						<tr>
							<td>Telp</td>
							<td><input type="number" name="telp" value="<?= $anggota['telp'];?>"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" value="<?= $anggota['username'];?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" value="<?= $anggota['password'];?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include '../aset/footer.php'
?>
