<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Belajar Ngoding</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body style="background: rgb(219,226,226);">

    <section class="Form mx-5 my-5">
        <div class="container" style="justify-content:center;display:flex">
            <div class="row no-gutters" style="border-radius:20px; box-shadow: 12px 12px 24px grey; height:1200px; width:850px; background:white">
                <div class="col-lg-12 px-5 pt-4">
                    <div class="">
                        <h1 class="font-weight-bold">Profile</h1>
                        <!-- <small><i>Sign into your account </i></small> -->
                    </div>
                    <form method="post" action='' onsubmit='return cekform()'>
                        
                    <div class="form-row px-1 pt-4">
                        Foto
                        <div class="col-lg-12 form-group">
                        <input type="file" name="gambar"class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" ></label>
                        </div>
                    </div>

                        <div class="form-row">
                            <div class="col-lg-12">
                                Nama Panjang
                                <input type="input" class="form-control my-1 p-4" name="nama" id="nama" placeholder="Masukkan Nama Panjang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Nama Panggilan
                                <input type="input" class="form-control my-1 p-4" name="namaPanggilan" id="namaPanggilan" placeholder="Masukkan Nama Panggilan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Tempat Lahir
                                <input type="input" class="form-control my-1 p-4" name="tempatLahir" id="tempatLahir" placeholder="Masukkan Tempat Lahit">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Tanggal Lahir
                                <input type="date" class="form-control my-1 p-4" name="tanggalLahir" id="tanggalLahir" >
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                            <fieldset disabled>
                                Usia
                                <input type="input" class="form-control my-1 p-4" name="umur" id="umur" placeholder="xxxxxxxx">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Kota Tinggal
                                <input type="input" class="form-control my-1 p-4" name="kotaTinggal" id="kotaTinggal" placeholder="Masukkan Kota Tempat Tinggal Anda">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Email
                                <input type="email" class="form-control my-1 p-4" name="email" id="email" placeholder="Masukkan Alamat Email">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                No HP
                                <input type="input" class="form-control my-1 p-4" name="noHP" id="noHP" placeholder="Masukkan No HP">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                Media Sosial
                                <select class="form-select form-control" name="mediaSosial" id="mediaSosial" aria-label="Default select example">
                                <option selected>Pilih Media Sosial Anda</option>
                                <option value="1">Facebook</option>
                                <option value="2">Instagram</option>
                                <option value="3">Twitter</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <button type="submit" onclick="return validateSubmit()"class="btn1 mt-3 mb-4" onmousemove="this.style.color='black'; this.style.backgroundColor='white';  this.style.border='2px solid'" onMouseOut="this.style.color='white'; this.style.backgroundColor='black'" style="border:none; outline:none; height:50px; width:100%; background-color:black; color:white; border-radius:4px; font-weight:bold">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>

        function cekform() {
            foto = document.getElementById('gambar')
            namalengkap = document.getElementById('nama');
            if (namalengkap.value <3) {
                alert('nama tidak boleh kurang dari 3 karakter');
                namalengkap.focus();
                return false;
            } else if (namalengkap.value.length <= 3) {
                alert('nama minimal 3 karakter');
                namalengkap.focus();
                return false;
            } else {
                alert('terima kasih telah mengisi form')
                return true;
            }
        }
        </script>
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>