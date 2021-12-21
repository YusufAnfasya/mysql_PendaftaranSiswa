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
        <form action="proses-edit.php" method="POST">
            
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
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>
                
            </div>
            </fieldset>
            
            
        </form>
        
    </body>
    </html>
    