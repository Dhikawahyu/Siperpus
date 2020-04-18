<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota inner join level on anggota.id_level = level.id_level where id_anggota = $id_anggota";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);


?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card" style="width:70rem">
			<center>
				<div class="card-header">
					<h2 class="card-header"><i class=""></i>&nbspDetail Anggota</h2>
				</div>
				<div class="card-body">
					<form method="post" action="proses-tambah.php">
					<table class="table">
						<tr>
							<td width="100px"><strong>Nama</strong></td>
							<td width="500px"><?= $detail['nama'] ?></td>
						</tr>
						<tr>
							<td width="100px"><strong>Kelas</strong></td>
							<td width="500px"><?= $detail['kelas'] ?></td>
						</tr>
						<tr>
							<td width="100px"><strong>Telp</strong></td>
							<td width="500px"><?= $detail['telp'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td>
							<a href="edit.php?id_anggota=<?= $detail['id_anggota']?>" class="badge badge-warning" style="width:80px">Edit</a>&nbsp&nbsp
							<a href="hapus.php?id_anggota=<?= $detail['id_anggota']?>" class="badge badge-danger" style="width:80px">Hapus</a></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
include '../aset/footer.php';
?>
