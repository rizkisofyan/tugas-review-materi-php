<?php
$pilihan = $_POST['pilih'];
$destinasi;
$hargaTiket;
if($pilihan == '1'){
    $destinasi = 'Bukit Tinggi';
    $hargaTiket = 10000;
}else if($pilihan == '2'){
    $destinasi = 'Pantai Sadranan';
    $hargaTiket = 15000;
}else if($pilihan == '3'){
    $destinasi = 'Candi Borobudur';
    $hargaTiket = 50000;
}else if($pilihan == '4'){
    $destinasi = 'Candi Prambanan';
    $hargaTiket = 50000;
}else if($pilihan == '5'){
    $destinasi = 'Keraton Yogyakarta';
    $hargaTiket = 5000;
}else if($pilihan == '6'){
    $destinasi = 'Malioboro';
    $hargaTiket = 5000;
}else if($pilihan == '8'){
    $destinasi = 'Goa Pindul';
    $hargaTiket = 100000;
}else{
    $destinasi = NULL;
    $hargaTiket = NULL;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if($pilihan == '7') : ?>
        <title>Cafe Pendopo Lawas</title>
        <?php else : ?>
        <title>Lanjutkan Pembelian</title>
        <?php endif ?>
    </head>
    <body style="font-family: Arial;">
        <?php if($pilihan == '7') : ?>
            <h2>Cafe Pendopo Lawas</h2>
            <div style="margin: auto; width: fit-content;" class="menu">
                <h3 style="text-align: center">Menu</h3>
                <table border="1" cellspacing="0" cellpadding="10px">
                    <tr>
                        <th rowspan="2">No.</th>
                        <th colspan="2">Makanan</th>
                        <th rowspan="2">No.</th>
                        <th colspan="2">Minuman</th>
                    </tr>
                    <tr>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>Nama Minuman</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sate Kelinci</td>
                        <td>Rp. 15000</td>
                        <td>1</td>
                        <td>Milk Shake</td>
                        <td>Rp. 10000</td>
                    </tr>
                </table>
                <br><br><br>
                <h3>Pesan</h3>
                <form action="pembayaran.php">
                    <table>
                        <tr>
                            <td><label for="pilihanMakanan">Pilih Makanan</label></td>
                            <td>:</td>
                            <td>
                                <select name="pilihanMakanan" id="pilihanMakanan">
                                    <option value="1">Sate Kelinci</option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jumlahMakanan">jumlah</label></td>
                            <td>:</td>
                            <td><input type="number" name="jumlahMakanan" id="jumlahMakanan"></td>
                        </tr>
                        <tr>
                            <td><label for="pilihanMinuman">Pilih Minuman</label></td>
                            <td>:</td>
                            <td>
                                <select name="pilihanMinuman" id="pilihanMinuman">
                                    <option value="1">Milk Shake</option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <td><label for="jumlahMinuman">jumlah</label></td>
                                <td>:</td>
                                <td><input type="number" name="jumlahMinuman" id="jumlahMinuman"></td>
                            </tr>
                        </table>
                    </form>
                </div>
        <?php else : ?>
                <h2>Lanjutkan Pembelian</h2>
                <table>
                    <tr>
                        <tr>
                            <td>Destinasi yang di pilih</td>
                            <td>:</td>
                            <td><?=$destinasi?></td>
                        </tr>
                        <tr>
                            <td>Harga tiket masuk</td>
                            <td>:</td>
                            <td><?=$hargaTiket?>/tiket</td>
                        </tr>
                    </tr>
                </table>
                <br>
                <form action="pembayaran.php" method="POST">
                    <label for="jumlah">Jumlah tiket yang ingin di beli</label>
                    <input type="number" name="jumlah" id="jumlah">
                    <input type="hidden" name="hargaTiket" value="<?=$hargaTiket?>">
                    <input type="hidden" name="destinasi" value="<?=$destinasi?>">
                    <input type="hidden" name="tipe" value="tiket">
                    <button type="submit">Beli</button>
                </form>
        <?php endif ?>
    </body>
</html>