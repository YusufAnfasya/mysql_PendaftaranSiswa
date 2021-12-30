<?php
 
        include("config.php");
        
        // kalau tidak ada id di query string
        if( !isset($_GET['id']) ){
            header('Location: list-siswa.php');
        }
        
        //ambil id dari query string
        $id = $_GET['id'];
        
        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM calon_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        $siswa = mysqli_fetch_assoc($query);
        
        // jika data yang di-edit tidak ditemukan
        if( mysqli_num_rows($query) < 1 ){
            die("data tidak ditemukan...");
        }
 
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Anak Tua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Pendaftaran Siswa Baru</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>
    <style>
     body{
         width: fit-content;
         margin: auto;
         text-align: left;
         background-image: url(https://images.unsplash.com/photo-1501618669935-18b6ecb13d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80);
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
        background-color: #fff4d1;
        margin: auto;
        margin-top: 50%;
        
        border: 1px solid #ffffff;
        box-shadow: 10px 10px 10px rgba(47, 47, 47, 0.25);
        border-radius: 40px;
        filter: opacity(100%);
     }
 </style>
</head>
 
<body>
    <header>
        </header>
    <div class="container">

        <h3>Formulir Edit Siswa</h3>
        <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
            
            <fieldset>
                
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                 <p>
                    <label for="foto">Foto :</label>  <br>
                    <input type="file" name="foto" id="foto" value="<?php echo $siswa['foto'] ?>"/>
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                    <a href="list-siswa.php"><button type="button" class="button-70">Batal</button></a>
                </p>
                
            </div>
            </fieldset>
            
            
        </form>
        
    </body>
    </html>
    