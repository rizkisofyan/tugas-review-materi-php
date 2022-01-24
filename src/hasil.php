<?php
$bayar = $_POST['inputbayar'];
$totalBayar = $_POST['totalBayar'];
$kembalian = $bayar - $totalBayar;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if($bayar < $totalBayar) : ?>
        <title>Maaf Pembelian Gagal</title>
        <?php else : ?>
        <title>Terima Kasih</title>
        <?php endif?>
    </head>
    <body style="font-family: Arial">
        <?php if($bayar < $totalBayar) : ?>
            <h2 style="text-align: center; color: red;">Maaf Pembelian Gagal, Uang yang anda bayar kurang ! Pembayaran tidak dapat diselesaikan</h2>
            <a href="../index.php">Kembali Ke Halaman Utama</a>
            <?php else : ?>
                <h2>Pembayaran berhasil, terima kasih sudah membeli!</h2>
            <table>
                <tr>
                    <td>Total yang harus di bayar</td>
                    <td>:</td>
                    <td>Rp. <?= $totalBayar?></td>
                </tr>
                <tr>
                    <td>Jumlah bayar</td>
                    <td>:</td>
                    <td>Rp. <?= $bayar?></td>
                </tr>
                <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?= $kembalian?></td>
                </tr>
            </table>
            <br>
            <a href="../index.php">Kembali Ke Halaman Utama</a>
            <?php endif?>
    </body>
</html>