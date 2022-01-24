<?php
$tipe = $_POST['tipe'];

$hargaTiket;
$destinasi;
$jumlahTiket;

$pilihanMakanan;
$jumlahMakanan;
$pilihanMinuman;
$jumlahMinuman;
$hargaMakanan;
$hargaMinuman;
$namaMakanan;
$namaMinuman;

$totalHarga;
$diskon;
$totalBayar;
if($tipe == 'tiket'){
    $hargaTiket = $_POST['hargaTiket'];
    $destinasi = $_POST['destinasi'];
    $jumlahTiket = $_POST['jumlah'];
    $totalHarga = $jumlahTiket * $hargaTiket;
    
    if($jumlahTiket >= 5){
        $diskon = (10/100) * $totalHarga;
    }else if($jumlahTiket >= 10){
        $diskon = (15/100) * $totalHarga;
    }else if($jumlahTiket >= 15){
        $diskon = (20/100) * $totalHarga;
    }else if($jumlahTiket >= 20){
        $diskon = (25/100) * $totalHarga;
    }else{
        $diskon = 0;
    }
    $totalBayar = $totalHarga - $diskon;
}else{
    $pilihanMakanan = $_POST['pilihanMakanan'];
    $pilihanMinuman = $_POST['pilihanMinuman'];
    $jumlahMakanan = $_POST['jumlahMakanan'];
    $jumlahMinuman = $_POST['jumlahMinuman'];

    if ($pilihanMakanan == '1') {
        $hargaMakanan = 15000;
        $namaMakanan = 'Sate Kelinci';
    } else if ($pilihanMakanan == '2') {
        $hargaMakanan = 0;
        $namaMakanan = 'Sate Kelinci';
    } else if ($pilihanMakanan == '3') {
        $hargaMakanan = 0;
        $namaMakanan = 'Sate Kelinci';
    } else if ($pilihanMakanan == '4') {
        $hargaMakanan = 0;
        $namaMakanan = 'Sate Kelinci';
    }else{
        $hargaMakanan = 0;
        $namaMakanan = 'Sate Kelinci';
    }

    if ($pilihanMinuman == '1') {
        $hargaMinuman = 10000;
        $namaMinuman = 'Milk Shake';
    } else if ($pilihanMinuman == '2') {
        $hargaMinuman = 0;
        $namaMinuman = 'Milk Shake';
    } else if ($pilihanMinuman == '3') {
        $hargaMinuman = 0;
        $namaMinuman = 'Milk Shake';
    } else if ($pilihanMinuman == '4') {
        $hargaMinuman = 0;
        $namaMinuman = 'Milk Shake';
    }else{
        $hargaMinuman = 0;
        $namaMinuman = 'Milk Shake';
    }
    
    $totalHarga = $hargaMakanan * $jumlahMakanan + $hargaMinuman * $jumlahMinuman;
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="font-family: Arial">
        <h2>Selesaikan Pembayaran</h2>
        <?php if($tipe == 'tiket') : ?>
            <table>
                <tr>
                    <td>Destinasi yang di pilih</td>
                    <td>:</td>
                    <td><?= $destinasi ?></td>
                </tr>
                <tr>
                    <td>Harga satuan tiket</td>
                    <td>:</td>
                    <td>Rp. <?=$hargaTiket?></td>
                </tr>
                <tr>
                    <td>Jumlah tiket yang di beli</td>
                    <td>:</td>
                    <td><?=$jumlahTiket?></td>
                </tr>
                <tr>
                    <td>Total harga</td>
                    <td>:</td>
                    <td>Rp. <?=$totalHarga?></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?=$diskon?></td>
                </tr>
                <tr>
                    <td>Total yang harus di bayar</td>
                    <td>:</td>
                    <td>Rp. <?=$totalBayar?></td>
                </tr>
            </table>
            <br>
            <form action="hasil.php" method="post">
                <label for="inputbayar">Bayar : </label>
                <input type="number" name="inputbayar" id="inputbayar">
                <input type="hidden" name="totalBayar" value="<?= $totalBayar?>">
                <button type="submit">bayar</button>
            </form>
        <?php else : ?>
            <table>
                <tr>
                    <td>Nama makanan yang di pesan</td>
                    <td>:</td>
                    <td><?= $namaMakanan?></td>
                </tr>
                <tr>
                    <td>Harga satu porsi <?= $namaMakanan?></td>
                    <td>:</td>
                    <td>Rp. <?= $hargaMakanan?></td>
                </tr>
                <tr>
                    <td>Nama minuman yang di pesan</td>
                    <td>:</td>
                    <td><?= $namaMinuman?></td>
                </tr>
                <tr>
                    <td>Harga satu porsi <?= $namaMinuman?></td>
                    <td>:</td>
                    <td>Rp. <?= $hargaMinuman?></td>
                </tr>
                <tr>
                    <td>Jumlah makanan di pesan</td>
                    <td>:</td>
                    <td><?= $jumlahMakanan?></td>
                </tr>
                <tr>
                    <td>Jumlah minuman yang di pesan</td>
                    <td>:</td>
                    <td><?= $jumlahMinuman?></td>
                </tr>
                <tr>
                    <td>Total harga untuk makanan</td>
                    <td>:</td>
                    <td>Rp. <?= $hargaMakanan * $jumlahMakanan?></td>
                </tr>
                <tr>
                    <td>Total harga untuk minuman</td>
                    <td>:</td>
                    <td>Rp. <?= $hargaMinuman * $jumlahMinuman?></td>
                </tr>
                <tr>
                    <td>Total harga yang harus di bayar</td>
                    <td>:</td>
                    <td>Rp. <?= $totalHarga?></td>
                </tr>
            </table>
            <br>
            <form action="hasil.php" method="post">
                <label for="inputbayar">Bayar : </label>
                <input type="number" name="inputbayar" id="inputbayar">
                <input type="hidden" name="totalBayar" value="<?= $totalHarga?>">
                <button type="submit">bayar</button>
            </form>
        <?php endif ?>
    </body>
</html>