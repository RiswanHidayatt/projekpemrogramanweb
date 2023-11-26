<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <a href="lihat_anggotact.php" class="btn btn-primary mb-2">KEMBALI</a>
    <h3>Kontak Kami</h3>
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
                    <label for="tipekontak" class="col-sm-2 col-form-label">tipe kontak</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" id="tipekontak" name="tipekontak" value="<?php echo $d['tipekontak']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $d['username']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nowhatsapp" class="col-sm-2 col-form-label">no whatsapp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nowhatsapp" name="nowhatsapp" value="<?php echo $d['nowhatsapp']; ?>"><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"><br>
                    </div>
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