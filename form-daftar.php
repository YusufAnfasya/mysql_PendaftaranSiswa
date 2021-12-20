<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
 
<body>
    <header>
        <center><h3>Formulir Pendaftaran Siswa Baru</h3></center>
    </header>
    <div class="container">
        <form action="proses-pendaftaran.php" method="POST">
 
            <fieldset>
 
            <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" class="form-control"/>
            </div>
           
            <p>
                <label for="alamat" class="form-label">Alamat: </label>
                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <br>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" class="form-label"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" class="form-label"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama" class="form-control">
                    <option class="dropdown-item">Islam</option>
                    <option class="dropdown-item">Kristen</option>
                    <option class="dropdown-item">Hindu</option>
                    <option class="dropdown-item">Budha</option>
                    <option class="dropdown-item">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah Asal" class="form-control"/>
            </p>
            <center>
                <input type="submit" value="Daftar" name="daftar" class="btn btn-success" />
                <a href="index.php" class="btn btn-danger">Batal</a>
            </center>
            </fieldset>
 
        </form>
    </div>
    </body>
</html>