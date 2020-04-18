<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi,"SELECT*FROM kategori");

?>
<!DOCTYPE html>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card" style="width:70rem">
			<center>
				<div class="card-header">
					<h2 class="card-header"><i class="fas fa-user-plus"></i>&nbspTambah Buku</h2>
				</div>
				<div class="card-body">
					<form method="post" action="proses-tambah.php">
					<table class="table">
						<tr>
							<td>Judul</td>
							<td><input type="text" name="judul"></td>
						</tr>
						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit"></td>
						</tr>
						<tr>
							<td>Pengarang</td>
							<td><input type="text" name="pengarang"></td>
						</tr>
						<tr>
							<td>Ringkasan</td>
							<td>
								<textarea name="ringkasan" style="width:170px">
									
								</textarea>
							</td>
						</tr>
						<tr>
							<td>Cover</td>
							<td><input type="file" name="cover"></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><input type="number" name="stok"></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>
								<select name="id_kategori">
									<option>-0- Pilih Kategori -0-</option>
									<?php 
									while($a = mysqli_fetch_assoc($query)):
									?>
									<option value="<?php echo $a['id_kategori']; ?>"><?php echo $a['kategori']; ?></option>
									<?php endwhile; ?>
								</select>
							</td>
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
</body>
</html>

<?php 
include '../aset/footer.php';
?>