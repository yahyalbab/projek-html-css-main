<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Aplikasi Penggajian</title>
    <style type="text/css">
        body,
        td,
        th {
            font-family: "Courier New", Courier, monospace;
        }

    </style>
</head>

<body>
    <p>
        <?php
        require 'config.php';
        include("config.php");
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $blnthn = $_POST['blnthn'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $pinjaman = $_POST['Pinjaman'];

        $hasil = mysqli_query($koneksi, "SELECT * FROM db_gaji WHERE nip = '$nip'   ");
        $record = mysqli_fetch_array($hasil);


        //kondisi jika nip / nama kosong, maka akan disuruh input lagi
        if (($nip == "") || ($nama == "") || ($blnthn == "")) {
            echo "<center><h1 style='font-family:arial ; color:red;'>Maaf NIP / Nama / ThnBln masih kosong.</h1>
Anda akan kembali ke halaman utama dalam 3 detik. </center>";
            header('refresh:3;url=index.php');
        } else {

            //menghitung gaji pokok
            if ($jabatan == "Direktur") {
                $gaji_pokok = 15000000;
            } else if ($jabatan == "Sekretaris") {
                $gaji_pokok = 6500000;
            } else if ($jabatan == "Manager") {
                $gaji_pokok = 10000000;
            } else if ($jabatan == "Keuangan") {
                $gaji_pokok = 8000000;
            } else if ($jabatan == "Staff") {
                $gaji_pokok = 5000000;
            }   else if ($jabatan == "Ob") {
                    $gaji_pokok = 2500000;  
            }

            //Menghitung Tunjangan
            if ($status == "Menikah") {
                $tunjangan = 0.15 * $gaji_pokok;
            } else {
                $tunjangan = 0.075 * $gaji_pokok;
            }

            //Menghitung Gaji Bersih
            $gaji_bersih = $gaji_pokok + $tunjangan;
            if ($pinjaman > $gaji_bersih) {
                echo "<center><h1 style='font-family:arial ; color:red;'>GAJI ENTE KECIL BRE</h1>
Anda akan kembali ke halaman utama dalam 3 detik. </center>";
header('refresh:3;url=index.php');
exit;
            }
            $gaji_potong = $gaji_bersih - $pinjaman;


            //Menyimpan data ke database
            if ($record != null) {
					if (($nip == $record['nip']) && ($blnthn == $record['blnthn'])) {
                    echo "Data gagal disimpan ";
                    $pesan = "Data gagal disimpan ";
                } else if (($nip == $record['nip']) || ($blnthn == $record['blnthn'])) {
                    $sql = "INSERT INTO db_gaji 
                    VALUES ( '$nip', '$nama', '$blnthn', '$status', '$jabatan', '$gaji_pokok', '$tunjangan', '$gaji_bersih', '$pinjaman')";

                    $hasil = mysqli_query($koneksi, $sql);


                    $pesan = "Data berhasil disimpan.";
                }
            } else {

                $sql = "INSERT INTO db_gaji 
    VALUES ('$nip', '$nama', '$blnthn', '$status', '$jabatan', '$gaji_pokok', '$tunjangan', '$gaji_bersih', '$pinjaman')";

                $hasil = mysqli_query($koneksi, $sql);


                $pesan = "Data berhasil disimpan.";
            }
            $bulan = substr($blnthn, 0, 2);
            $convert = DateTime::createFromFormat('!m', $bulan);
            $tahun = substr($blnthn, 2, 4);

            
        ?>
    </p>

    <div align="center">
        <table width="395" border="1">
            <tr>
                <td bgcolor="#00FFFF">
                    <table width="395" border="0">
                        <tr>
                            <td colspan="2">
                                <div align="center"><strong>DAFTAR GAJI PEGAWAI</strong></div>
                            </td>
                        </tr>
                        <tr>
                            <td height="10" colspan="2">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td width="156">&nbsp;NIP</td>
                            <td width="229">: <?php echo "$nip"; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Nama</td>
                            <td>: <?php echo "$nama"; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Bln Thn Gaji</td>
                            <td>: <?php echo $convert->format('F'), " ", $tahun; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Status</td>
                            <td>: <?php echo "$status"; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Jabatan</td>
                            <td>: <?php echo "$jabatan"; ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;GajiPokok</td>
                            <td>: <?php echo "Rp. " . number_format($gaji_pokok); ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Tunjangan Gaji</td>
                            <td>: <?php echo "Rp. " . number_format($tunjangan); ?></td>
                        </tr>
                        <tr>
                            <td>&nbsp;Pinjaman</td>
                            <td>: <?php echo "Rp. " . number_format($pinjaman); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">____________________________________ +</td>
                        </tr>
                        <tr>
                            <td>&nbsp;Gaji Bersih</td>
                            <td>: <?php echo "Rp. " . number_format($gaji_potong); ?></td>
                        </tr>
                        <?php if ($record != null) {
                            if (($nip == $record['nip']) && ($blnthn == $record['blnthn'])) {
                                echo "<tr>
                            <td colspan='2' style='background-color: red;' >&nbsp;<b>$pesan</b></td>
                        </tr>";
                            } else if (($nip == $record['nip']) || ($blnthn == $record['blnthn'])) {
                                echo "<tr>
                            <td colspan='2'>&nbsp;<b>$pesan</b></td>
                        </tr>";
                            }
                        } else {
                            echo "<tr>
                            <td colspan='2'>&nbsp;<b>$pesan</b></td>
                        </tr>";
                        }
                        ?>

                        <tr>
                            <td colspan="2"><a href="javascript:history.back()">Kembali</a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>


<?php
        }

?>
</body>

</html>
