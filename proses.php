<?php
    // ambil data yg dikirim dari form menggunakan variabel global $_POST
    $nama = $_POST["nama"];
    $almt  =  $_POST['almt'];
    $hp  =  $_POST['hp'];
    $platform  =  $_POST['platform'];
    $animasi  =  $_POST['animasi'];
    $database  =  $_POST['database'];
    $data =  $_POST['data'];
    $latihan =  $_POST['latihan'];
    $perawatan  =  $_POST['perawatan'];


    $biaya = 0;
    // hitung biaya pembuatan aplikasi
    //hitung plastform
    if (($platform == "1") or ($platform == "")) {
        $biaya = $biaya + 2000000;
    }
    if ($platform == "2") {
        $biaya = $biaya + 1500000;
    }
    if ($platform == "3") {
        $biaya = $biaya + 1000000;
    }

    //hitung animasi
    if (($animasi == "1") or ($animasi == "")) {
        $biaya = $biaya + 0;
    }
    if ($animasi == "2") {
        $biaya = $biaya + 250000;
    }
    if ($animasi == "3") {
        $biaya = $biaya + 500000;
    }

    //hitung database
    if (($database == "1") or ($database == "")) {
        $biaya = $biaya + 0;
    }
    if ($database == "2") {
        $biaya = $biaya + 250000;
    }
    if ($database == "3") {
        $biaya = $biaya + 350000;
    }
    if ($database == "4") {
        $biaya = $biaya + 450000;
    }

    //hitung entry data record
    if ($data == 0) {
        $biaya = $biaya + 0;
    } else {

        $js = $data * 250;
        $biaya = $biaya + $js;
    }

    //hitung latihan
    if (($latihan == "1") or ($latihan == "")) {
        $biaya = $biaya + 1000000;
    }

    //hitung perawatan 
    if (($perawatan == "1") or ($perawatan == "")) {
        $biaya = $biaya + 1000000;
    }

    $angka = number_format($biaya, 0, ",", ".");
    echo "<h2>Hasil Perhitungan Pembuatan Aplikasi </h2>";
    echo "<hr>";
?>

<table>
    <tr>
        <td>Nama Pemesan Aplikasi</td>
        <td>:</td>
        <td><?php echo $nama; ?></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $almt; ?></td>
    </tr>

    <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><?php echo $hp; ?></td>
    </tr>

    <tr>
        <td>Platform Aplikasi</td>
        <td>:</td>
        <td>
            <?php
            if (($platform == "1") or ($platform == "")) {
                echo "Android / IoS";
            }
            if ($platform == "2") {
                echo "Website";
            }
            if ($platform == "3") {
                echo "Desktop";
            }
            ?>
        </td>
        <td align="right">
            <?php
            if (($platform == "1") or ($platform == "")) {
                echo "2.000.000";
            }
            if ($platform == "2") {
                echo " 1.500.000";
            }
            if ($platform == "3") {
                echo " 1.000.000";
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Jenis Animasi</td>
        <td>:</td>
        <td>
            <?php
            if (($animasi == "1") or ($animasi == "")) {
                echo "Tanpa Animasi";
            }
            if ($animasi == "2") {
                echo "Animasi Sederhana";
            }
            if ($animasi == "3") {
                echo "Animasi Kompleks";
            }
            ?>
        </td>
        <td align="right">
            <?php
            if (($animasi == "1") or ($animasi == "")) {
                echo "";
            }
            if ($animasi == "2") {
                echo "250.000";
            }
            if ($animasi == "3") {
                echo "500.000";
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Jenis Database</td>
        <td>:</td>
        <td>
            <?php
            if (($database == "1") or ($database == "")) {
                echo "Tanpa Database";
            }
            if ($database == "2") {
                echo "MySql";
            }
            if ($database == "3") {
                echo "Firebird";
            }
            if ($database == "4") {
                echo "Oracle";
            }
            ?>
        </td>
        <td align="right">
            <?php
            if (($database == "1") or ($database == "")) {
                echo "";
            }
            if ($database == "2") {
                echo "250.000";
            }
            if ($database == "3") {
                echo "350.000";
            }
            if ($database == "4") {
                echo "450.000";
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Jumlah Entry Data</td>
        <td>:</td>
        <td>
            <?php
            echo "Jumlah record = " . $data;
            ?>
        </td>
        <td align="right">
            <?php
            if ($data > 0) {
                $js = $data * 250;
                echo number_format($js,0,",",".");
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Jasa Pelatihan</td>
        <td>:</td>
        <td>
            <?php
            if (($latihan == "1") or ($latihan == "")) {
                echo "Dengan Paket Pelatihan Aplikasi";
            } else {
                echo "Tanpa Pelatihan Aplikasi";
            }
            ?>
        </td>
        <td align="right">
            <?php
            if (($latihan == "1") or ($latihan == "")) {
                echo "1.000.000";
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Jasa Maintenance</td>
        <td>:</td>
        <td>
            <?php
            if (($latihan == "1") or ($latihan == "")) {
                echo "Dengan Paket Maintenance";
            } else {
                echo "Tanpa Maintenance Aplikasi";
            }
            ?>
        </td>
        <td align="right">
            <?php
            if (($perawatan == "1") or ($perawatan == "")) {
                echo "1.000.000";
            }
            ?>
        </td>
    </tr>

</table>
<hr>
<?php
echo "<b>Total Biaya Pembuatan Aplikasi : Rp. " . $angka . ",-</b>";

?>
<hr>
<a href="http://localhost/tugas/">Back</a>