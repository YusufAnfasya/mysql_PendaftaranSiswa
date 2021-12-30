<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];


    $fotobaru = date('dmYHis').$foto;
    $path = "images/".$fotobaru;

    if(move_uploaded_file($tmp, $path)){
        $sql = "INSERT INTO calon_siswa (foto, nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$fotobaru', '$nama', '$alamat', '$jk', '$agama', '$sekolah')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: list-siswa.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    }

} else {
    die("Akses dilarang...");
}

?>