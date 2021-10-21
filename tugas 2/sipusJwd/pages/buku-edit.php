<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
<form action="proses/buku-edit-proses.php" method="post" onsubmit="return validateEditBook()" name="formEditBuku">
	<table id="tabel-input">
		<tr>
		<label for="id_buku" class="form-label">ID Buku</label>
        <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly>
		</tr>
		<tr>
		<label for="judul_buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>">
		</tr>
		<tr>
		<label for="kategori" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>">
		</tr>
		<tr>
		<label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>">
		</tr>
		<tr>
		<label for="penerbit" class="form-label">Penerbit</label>
		<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>">
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>