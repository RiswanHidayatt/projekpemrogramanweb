<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir input data joki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center">FORM JOKI</h3><hr>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">
                    <div class="card">
                        <img class="card-img-top" src="jokimlbbrank.png" alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center">JOKI MOBILE LEGEND</h5>
                        </div>
                    </div>
                </div>
                <h2>CARA ORDER JOKI</h2>
                <ol>
                    <li>Lengkapi data joki dengan teliti</li>
                    <li>Pilih paket joki</li>
                    <li>Pilih metode pembayaran</li>
                    <li>Klik Order Now dan lakukan pembayaran</li>
                    <li>Silahkan menunggu sampai akun anda selesai di joki</li>
                </ol>
        <form action="proses_inputjk.php" method="post">
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukkan email anda:">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password anda:">
            </div>
            <div class="form-group">
                <label for="login">login</label>
                <input type="text" name="login" class="form-control" placeholder="Terdapat login via Moonton-VK-Tiktok-Facebook">
            </div>
            <div class="form-group">
                <label for="hero">hero</label>
                <input type="text" name="hero" class="form-control" placeholder="Request hero minimal 3:">
            </div><br>
            <h4 class="mt-4">Pilih nominal:</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Paket Joki</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Legend V - Mythic</td>
                    </tr>
                    <tr>
                        <td>Mythic - Mythic Honor</td>
                    </tr>
                    <tr>
                        <td>Mythic Honor - Mythic Glory</td>
                    </tr>
                    <tr>
                        <td>Mythic - Mythic Glory</td>
                    </tr>
                    <tr>
                        <td>Mythic Glory - Mythic Immortal</td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <label for="paket_joki">paket joki</label>
                <input type="text" name="paket_joki" class="form-control" placeholder="Paket yang ingin anda beli:">
            </div><br>
            <div class="form-group">
                <label for="metode_pembayaran">metode pembayaran</label>
                <input type="text" name="metode_pembayaran" class="form-control" placeholder="Tersedia Dana-Ovo-Gojek-BRI:">
            </div><br>
            <input type="submit" value="Simpan" class="btn btn-success">
        </form>
    </div>
    
</body>
</html>