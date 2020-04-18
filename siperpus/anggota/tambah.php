<?php 
include '../aset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card" style="width:70rem">
			<center>
				<div class="card-header">
					<h2 class="card-header"><i class="fas fa-user-plus"></i>&nbspTambah Anggota</h2>
				</div>
				<div class="card-body">
					<form method="post" action="proses-tambah.php">
					<table class="table">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="text" name="kelas"></td>
						</tr>
						<tr>
							<td>Telp</td>
							<td><input type="text" name="telp"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td></td>
							<td><button style="width:90px" type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button style="width:90px" type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
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