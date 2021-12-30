<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
 <style>
     body{
         width: fit-content;
         margin: auto;
         text-align: left;
         background-image: url(https://images.unsplash.com/photo-1617096199297-06d372cba8cd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80);
         background-size: cover;
         font-family: 'Candal', sans-serif;
         font-family: 'Spinnaker', sans-serif;
     }
     h3{
         width: 80%;
         padding: 3%;
         
         
     }
     .container{
        position: relative;
  
        width: 400px;
        
        padding: 10%;
        background-color: #00f5c8;
        margin: auto;
        margin-top: 15%;
        
        border: 1px solid #ffffff;
        box-shadow: 10px 10px 10px rgba(47, 47, 47, 0.25);
        border-radius: 40px;
        filter: opacity(96%);
     }
 </style>
<body>
    <header>
        </header>
        <div class="container">
            <form action="proses-pendaftaran.php" method="POST"  enctype="multipart/form-data">
                <center><h3>Formulir Pendaftaran Siswa Baru</h3>   </center>
                
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

            <p>
				<label for="foto">Foto :</label>
                <input name="foto" type="file" id="foto">
			</p>
            <p>
				<input class="submit" type="submit" value="Daftar" name="daftar" />
                <a href="list-siswa.php"><button type="button" class="button-70">Batal</button></a>
			</p>
            </fieldset>
 
        </form>
    </div>
    </body>
</html>