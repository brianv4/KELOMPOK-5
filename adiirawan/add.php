<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="indexx.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nik</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>jenis kelamin</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td>no hp</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jeniskel = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO peserta(nik,nama,jenis_kelamin,alamat,nohp) VALUES('$nik','$nama','$jeniskel''$alamat','$nohp',)");

        // Show message when user added
        echo "User added successfully. <a href='indexx.php'>View Users</a>";
    }
    ?>
</body>
</html>