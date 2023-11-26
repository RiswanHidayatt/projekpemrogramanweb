<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <a href="lihat_anggotagb.php" class="btn btn-primary mb-2">KEMBALI</a>
    <h3>EDIT DATA PEMBELIAN</h3>
    <?php
    include 'koneksi.php';

    
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    
    $stmt = $koneksi->prepare("SELECT * FROM gamepc WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($d = $result->fetch_assoc()) {
        ?>
            <form method="post" action="proses_editgb.php">
                <div class="form-group row">
                    <label for="user_idgame" class="col-sm-2 col-form-label">ID Game</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" id="user_idgame" name="user_idgame" value="<?php echo $d['user_idgame']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_servergame" class="col-sm-2 col-form-label">Server</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_servergame" name="user_servergame" value="<?php echo $d['user_servergame']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nominal_pembelian" class="col-sm-2 col-form-label">NominalPembelian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nominal_pembelian" name="nominal_pembelian" value="<?php echo $d['nominal_pembelian']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_pembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" value="<?php echo $d['jumlah_pembelian']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Metode_pembayaran" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Metode_pembayaran" name="Metode_pembayaran" value="<?php echo $d['Metode_pembayaran']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <input type="submit" class="btn btn-success" value="SIMPAN">
                    </div>
                </div>

                </div>
            </form>
        <?php
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>