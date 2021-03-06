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
                        <td>Roti Bakar</td>
                        <td>Rp. 13000</td>
                        <td>1</td>
                        <td>Es Teh Manis</td>
                        <td>Rp. 8000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Seblak</td>
                        <td>Rp. 10000</td>
                        <td>2</td>
                        <td>Milk Tea</td>
                        <td>Rp. 12000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pisang Goreng</td>
                        <td>Rp. 11000</td>
                        <td>3</td>
                        <td>Air Mineral</td>
                        <td>Rp. 7000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sosis Bakar</td>
                        <td>Rp. 10000</td>
                        <td>4</td>
                        <td>Kopi Susu</td>
                        <td>Rp. 8000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mie Ayam</td>
                        <td>Rp. 12000</td>
                        <td>4</td>
                        <td>Thai Tea</td>
                        <td>Rp. 10000</td>
                    </tr>
                </table>
                <br><br><br>
                <h3>Buat Pesanan</h3>
                <form action="pembayaran.php" method="POST">
                    <table>
                        <tr>
                            <td><label for="pilihanMakanan">Pilih Makanan</label></td>
                            <td>:</td>
                            <td>
                                <select name="pilihanMakanan" id="pilihanMakanan">
                                    <option value="1">Roti Bakar</option>
                                    <option value="2">Seblak</option>
                                    <option value="3">Pisang Goreng</option>
                                    <option value="4">Sosis Bakar</option>
                                    <option value="5">Mie Ayam</option>
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
                                    <option value="1">Es Teh Manis</option>
                                    <option value="2">Milk Tea</option>
                                    <option value="3">Air Mineral</option>
                                    <option value="4">Kopi Susu</option>
                                    <option value="5">Thai Tea</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jumlahMinuman">jumlah</label></td>
                            <td>:</td>
                            <td><input type="number" name="jumlahMinuman" id="jumlahMinuman"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit">pesan</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="tipe" value="cafe">
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