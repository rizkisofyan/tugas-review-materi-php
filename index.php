<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang di Yogyakarta</title>
    </head>
    <body style="font-family: Arial">
        <div class="container">
            <h2>Pilih Destinasi Yang Kamu Ingin Kunjungi</h2>
            <div class="pilihan">
                <table>
                    <tr>
                        <td>1. Bukit Bintang </td>
                        <td>Rp. 10000/tiket</td>
                    </tr>
                    <tr>
                        <td>2. Pantai Pasandran</td>
                        <td>Rp. 15000/tiket</td>
                    </tr>
                    <tr>
                        <td>3. Candi Borobudur</td>
                        <td>Rp. 50000/tiket</td>
                    </tr>
                    <tr>
                        <td>4. Candi Prambanan</td>
                        <td>Rp. 50000/tiket</td>
                    </tr>
                    <tr>
                        <td>5. Keraton Yogyakarta</td>
                        <td>Rp. 5000/tiket</td>
                    </tr>
                    <tr>
                        <td>6. Malioboro</td>
                        <td>Rp. 5000/tiket</td>
                    </tr>
                    <tr>
                        <td>7. Cafe Pendopo Lawas</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>8. Gua Pindol</td>
                        <td>Rp. 100000/tiket</td>
                    </tr>
                </table>
            </div>
            <br>
            <form action="src/process.php" method="POST">
                <label for="pilih">Pilih : </label>
                <select name="pilih" id="pilih">
                    <option value="1">Bukit Bintang</option>
                    <option value="2">Pantai Sadranan</option>
                    <option value="3">Candi Borobudur</option>
                    <option value="4">Candi Prambanan</option>
                    <option value="5">Keraton Yogyakarta</option>
                    <option value="6">Malioboro</option>
                    <option value="7">Cafe Pendopo Lawas</option>
                    <option value="8">Goa Pindul</option>
                </select>
                <button type="submit" name="submit">kirim</button>
            </form>
        </div>
    </body>
</html>