<?php include("config.php"); ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', 'Verdana', sans-serif;
            display: flex;
            align-items: center;
            padding: 1.25em;
            min-height: 100vh;
            color: #444;
            background-image: url(https://images.unsplash.com/photo-1604134967494-8a9ed3adea0d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80);
            background-size: cover;
        }
        
        th {
            background: rgb(26, 156, 255);
            color: #fff;
        }
        td:nth-child(1) {
            background: rgb(182, 64, 64);
            color: #fff;
            border-radius: 1em 1em 0 0;
        }
        th, td {
            padding: 1em;
        }
        tr, td {
            display: block;
        }
        td {
            position: relative;
        }
        td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            padding-left: 1em;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase;
        }
        tr {
            margin-bottom: 1.5em;
            border: 1px solid #ddd;
            border-radius: 1em;
            text-align: right;
        }
        tr:last-of-type {
            margin-bottom: 0;
        }
        td:nth-child(n+2):nth-child(odd) {
            background-color: #ddd;
        }
        @media only screen and (min-width: 768px) {
            table {
                max-width: 1200px;
                margin: auto ;
                border: 1px ;
            }
            thead {
                visibility: visible;
                position: relative;
            }
            th {
                text-align: left;
                text-transform: uppercase;
                font-size: .9em;
            }
            tr {
                display: table-row;
                border: none;
                border-radius: 0;
                text-align: left;
            }
            tr:nth-child(even) {
                background-color: #ddd;
            }
            td {
                display: table-cell;
            }
            td::before {
                content: none;
            }
            td:nth-child(1) {
                background: transparent;
                color: #444;
                border-radius: 0;
            }
            td:nth-child(n+2):nth-child(odd) {
                background-color: transparent;
            }
        }
        .container {
            position: relative;
            text-align: center;
            width: 1220px;
            height: fit-content;

            margin: auto;
            margin-top: 15%;
            background: #a9ffeb;
            border: 1px solid #ffffff;
            box-shadow: 10px 10px 10px rgba(47, 47, 47, 0.25);
            border-radius: 40px;
            filter: opacity(96%);
        }
        .button-70 {
            background-color: rgb(17, 128, 0);
            border: 0;
            border-radius: 4px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: Montserrat,sans-serif;
            font-size: .9em;
            margin: 5px;
            padding: 10px 15px;
            text-align: center;
            user-select: none;
            -webkit-user-select: none;
        }
        .button-70:hover {
            box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
        }
    </style>
</head>
 
<body>
    <div class="container">
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
 
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
 
    <br>
 
    <table >
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
 
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
 
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
 
            echo "<td>".$siswa['id']."</td>";
            echo "<td><img src='images/".$siswa['foto']."' width='100' height='100'></td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
 
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";
 
            echo "</tr>";
        }
        ?>
 
    </tbody>
    </table>
 
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <a href="index.php"><button type="button" class="button-70">Kembali</button></a>
    </div>
 
</body>
</html>