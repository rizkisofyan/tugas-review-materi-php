<?php
$tipe = $_POST['tipe'];

$hargaTiket;
$destinasi;
$jumlahTiket;

$pilihanMakanan;
$jumlahMakanan;
$pilihanMinuman;
$jumlahMinuman;


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
    <body>
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
        <?php endif ?>
    </body>
</html>