<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>USER</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="input.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>ID User</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Level</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id_user']."</td>";
            echo "<td>".$siswa['nama_user']."</td>";
            echo "<td>".$siswa['alamat_user']."</td>";
            echo "<td>".$siswa['nohp_user']."</td>";
            echo "<td>".$siswa['level']."</td>";
            echo "<td>".$siswa['username']."</td>";
            echo "<td>".$siswa['password']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id_user']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id_user']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>