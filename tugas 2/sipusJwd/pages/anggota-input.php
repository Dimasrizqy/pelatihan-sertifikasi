<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
<form action="proses/anggota-input-proses.php" onsubmit="return validateMember()" method="post" name="formAnggota">
	<table id="tabel-input">
	<div class="col-12">
	<?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idanggota) as maxID from tbanggota");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $kode; ?>" readonly required>
		<tr>
				<label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
		</tr>
		<tr>		
				<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="" select="selected">-Pilih-</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
		</tr>
		<tr>
				<label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat">
		</tr>
		<tr>
			<td class="label-formulir"></td> <br>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
		</tr>
	</table>
	</form>
</div>


<script>
    function validateMember() {
        let nama = document.forms["formAnggota"]["nama"].value;
        if (nama === "") {
            alert("Nama tidak boleh kosong");
            return false;
        }
        return true;
    }
</script>