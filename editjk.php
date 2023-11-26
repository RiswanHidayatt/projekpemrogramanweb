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
    <a href="lihat_anggotajk.php" class="btn btn-primary mb-2">KEMBALI</a>
    <h3>KONTAK</h3>
    <?php
    include 'koneksi.php';

    
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    
    $stmt = $koneksi->prepare("SELECT * FROM contact WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($d = $result->fetch_assoc()) {
        ?>
            <form method="post" action="proses_editct.php">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $d['email']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $d['password']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="login" class="col-sm-2 col-form-label">login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="login" name="login" value="<?php echo $d['login']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hero" class="col-sm-2 col-form-label">hero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hero" name="hero" value="<?php echo $d['hero']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="paket_joki" class="col-sm-2 col-form-label">paket joki</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="paket_joki" name="paket_joki" value="<?php echo $d['paket_joki']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="metode_pembayaran" class="col-sm-2 col-form-label">metode Pembayaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" value="<?php echo $d['metode_pembayaran']; ?>"><br>
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