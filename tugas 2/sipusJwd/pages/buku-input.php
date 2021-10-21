<div id="label-page"><h3>Input Data Buku</h3></div>
<div id="content">
<form action="proses/buku-input-proses.php" method="post" onsubmit="return validateBook()" name="formBuku">
				<?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idbuku) as maxID from tbbuku");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
	<table id="tabel-input">
		<tr>
		<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $kode; ?>"
                       readonly required>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td> <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Input Judul Buku"> </td>
			
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
                <select name="kategori" class="form-select"  >
                    <option value="" select="selected">-Pilih-</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Ilmu Agama">Ilmu Agama</option>
                    <option value="Karya Sastra">Karya Sastra</option>
                </select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td><input type="text" class="form-control" id="pengarang" name="pengarang"placeholder="Input Nama Pengarang"  > </td>
			
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td><input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input Penerbit"> </td>
			
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>
<script>
    function validateBook() {
        let judulbuku = document.forms["formBuku"]["judul_buku"].value;
        if (judulbuku === "") {
            alert("Nama buku tidak boleh kosong");
            return false;
        }
        return true;

        let kategori = document.forms["formBuku"]["kategori"].value;
        if (kategori === "") {
            alert("Kategori tidak boleh kosong");
            return false;
        }
        return true;

        let pengarang = document.forms["formBuku"]["pengarang"].value;
        if (pengarang === "") {
            alert("Pengarang tidak boleh kosong");
            return false;
        }
        return true;

        let penerbit = document.forms["formBuku"]["penerbit"].value;
        if (penerbit === "") {
            alert("Penerbit tidak boleh kosong");
            return false;
        }
        return true;
    }

</script>