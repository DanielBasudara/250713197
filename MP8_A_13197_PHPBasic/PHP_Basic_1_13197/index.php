<?php
    echo "<h1>Hobi</h1>";
    echo '<form method="POST" action="">
            <p>Nama : <br /><input type="text" name="nama" /></p>
            <p>NPM : <br /><input type="text" name="npm" /></p>
            <p>Hobi : <br /><input type="text" name="hobi" /></p>
            <input type="submit" value="Submit" />
          </form>';
        
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $hobi = $_POST['hobi'];
        echo "Hobi " . htmlspecialchars($nama) . " / " . htmlspecialchars($npm) . " / " . htmlspecialchars($hobi);
    } else {
        echo "Silahkan isi formulir di atas untuk mengirimkan data hobi anda";
    }
?>