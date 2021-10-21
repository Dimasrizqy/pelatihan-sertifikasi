<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
<form action="proses/anggota-edit-proses.php" onsubmit="return validateMember()" method="post" name="formEditAnggota">
	<table id="tabel-input">
		<tr>
				<label for="id_anggota" class="form-label">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly>
		</tr>
		<tr>
				<label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" >
		</tr>
		
		<tr>
				<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" >
                    <option value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" select="selected"><?php echo $r_tampil_anggota['jeniskelamin']; ?></option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
		</tr>
		<tr>
				<label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $r_tampil_anggota['alamat']; ?>">
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
		</tr>
	</table>
	</form>
</div>
<script>

    function validateMember() {
        let nama = document.forms["formEditAnggota"]["nama"].value;
        if (nama === "") {
            alert("Nama tidak boleh kosong");
            return false;
        }
        return true;
    }
</script>