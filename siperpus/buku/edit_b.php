<?php
include '../koneksi.php';

include '../aset/header.php';

$id_buku = $_GET['id_buku'];
$sql = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");

$a = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card" style="width:70rem">
            <center>
                <div class="card-header" style="width:70rem">
                    <h2 class="card-header"><i class="fa fa-user-edit"></i>&nbspEdit Buku</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-edit.php">
                    <table class="table">
                        <input type="hidden" name="id_buku" value="<?= $a['id_buku'] ?>">
                            <tr>
                                <td>Judul</td>
                                <td><input type="text" name="judul" value="<?= $a['judul'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td><input type="text" name="penerbit" value="<?= $a['penerbit'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td><input type="text" name="pengarang" value="<?= $a['pengarang'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Ringkasan</td>
                                <td>
                                    <textarea name="ringkasan" style="width:170px"><?= $a['ringkasan'] ?>
                                        
                                    </textarea>
                                </td>
                            </tr><input type="hidden" name="cover" value="<?= $a['cover'] ?>">
                            <tr>
                                <td>Stok</td>
                                <td><input type="number" name="stok" value="<?= $a['stok'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>
                                    <select name="id_kategori" required>
                                        <option>-0- Pilih Kategori -0-</option>
                                        <?php
                                        $querry = mysqli_query($koneksi,"SELECT * FROM  kategori"); 
                                        while($b = mysqli_fetch_assoc($querry)):
                                        ?>
                                        <option value="<?php echo $b['id_kategori']; ?>"><?php echo $b['kategori']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
                            </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>>

<?php
include '../aset/footer.php';
?>