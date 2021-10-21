<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data Buku</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
			<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku']; ?>"class="tombol btn-secondary">Edit</a></div>
				<div class="tombol-opsi-container"><ahref="#" onclick="hapusBuku('<?php echo $r_tampil_buku['idbuku']; ?>')"class="tombol btn-danger">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<script>
    function hapusBuku(id) {
        var r = confirm("Apakah anda yakin akan menghapus data buku " + id + " ?");
        if (r == true) {
            txt = "Data berhasil dihapus";

        } else {
            alert = "Penghapusan dibatalkan";
			return false;
        }
        alert(txt);
        window.location.href = 'proses/buku-hapus.php?id=' + id;
    }
</script>