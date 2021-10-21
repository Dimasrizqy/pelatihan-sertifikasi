<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
<form action="proses/transaksi-peminjaman-input-proses.php" method="post" onsubmit="return validateBorrow()" name="formBorrow">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<label for="id_transaksi" class="form-label">ID Transaksi</label>
                <?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idtransaksi) as maxID from tbtransaksi");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi"value="<?php echo $kode; ?>" readonly  >
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="id_anggota" class="isian-formulir isian-formulir-border">
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="id_buku" class="isian-formulir isian-formulir-border">
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>
<script>
    function validateBorrow() {
        let nama = document.forms["formBorrow"]["id_anggota"].value;
        if (nama === "") {
            alert("Nama anggota tidak boleh kosong");
            return false;
        }
        return true;

        let buku = document.forms["formBorrow"]["id_buku"].value;
        if (buku === "") {
            alert("Kategori tidak boleh kosong");
            return false;
        }
        return true;

        let pinjam = document.forms["formBorrow"]["tgl_pinjam"].value;
        if (pinjam === "") {
            alert("Mohon isi tanggal pinjam");
            return false;
        }
        return true;

    }
</script>