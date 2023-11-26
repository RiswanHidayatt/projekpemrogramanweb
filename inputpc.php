<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir input data pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <h3 class="text-center">Form Pembelian</h3><hr>
        <div class="container-fluid py-5">
      <div class="container">
        <h2 class="text-center">CARA TOP UP GAME PC</h2>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-6 col-lg-3 hovered-card mb-3">
              <div class="card">
                <img class="card-img-top" src="valorant.jpg" alt="" />
                <div class="card-body">
                  <h5 class="card-title text-center">Valorant</h5>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                   
                  </div>
              </div>
            </div>
  
            <div class="col-sm-6 col-lg-3 hovered-card mb-3">
              <div class="card">
                <img class="card-img-top" src="genshin impact.jpeg" alt="" />
                <div class="card-body">
                  <h5 class="card-title text-center">Genshin Impact</h5>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                  
                  </div>
              </div>
            </div>
  
            <div class="col-sm-6 col-lg-3 hovered-card mb-3">
              <div class="card">
                <img class="card-img-top" src="wild rift.jpg" alt="" />
                <div class="card-body">
                  <h5 class="card-title text-center">Wild Rift</h5>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                  
                  </div>
              </div>
            </div>
        <ol>
            <li>Masukkan ID dan server</li>
            <li>Pilih nominal diamond</li>
            <li>Pilih metode pembayaran</li>
            <li>Klik Order Now dan lakukan pembayaran</li>
            <li>Diamond otomatis akan masuk ke akun Anda</li>
        </ol>
        </div>
        <form action="proses_inputpc.php" method="post">
            <div class="form-group">
                <label for="user_idgame">ID Game</label>
                <input type="text" name="user_idgame" class="form-control" placeholder="Masukkan ID Game Kalian:">
            </div>
            <div class="form-group">
                <label for="user_servergame">Server</label>
                <input type="text" name="user_servergame" class="form-control" placeholder="Masukkan Server Game Kalian:">
            </div>
            <h4 class="mt-4">Pilih nominal Points:</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Jumlah Points</th>
            <th>Harga Points</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>300 Points</td>
            <td>Rp 32,000</td>
          </tr>
          <tr>
            <td>625 Points</td>
            <td>Rp 63,000</td>
          </tr>
          <tr>
            <td>1125 Points</td>
            <td>Rp 116,000</td>
          </tr>
          <tr>
            <td>1650 Points</td>
            <td>Rp 156,000</td>
          </tr>
          <tr>
            <td>7000 Points</td>
            <td>Rp 650,000</td>
          </tr>
        </tbody>
      </table>
            <div class="form-group">
                <label for="nominal_pembelian">Nominal Pembelian</label>
                <input type="text" name="nominal_pembelian" class="form-control" placeholder="Nomial Pembelian:">
            </div>
            <div class="form-group">
                <label for="jumlah_pembelian">Jumlah Pembelian</label>
                <input type="text" name="jumlah_pembelian" class="form-control" placeholder="Jumlah Pembelian">
            </div>
            <div class="form-group">
                <label for="Metode_pembayaran">Metode Pembayaran</label>
                <input type="text" name="Metode_pembayaran" class="form-control" placeholder="Tersedia Dana-Ovo-Gopay-BRI">
            </div><br>
            <input type="submit" value="Order now" class="btn btn-success">
        </form>
    </div>
    
</body>
</html>