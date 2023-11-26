<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Pembelian</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Data Pembelian</h1>

        <a href="inputpc.php" class="btn btn-primary mb-3">+ Tambah data</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>ID Game</th>
                <th>Server</th>
                <th>Nominal Pembelian</th>
                <th>Jumlah Pembelian</th>
                <th>Metode Pembayaran</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                $sql = "SELECT * FROM gamepc ORDER BY id";
                $qry = mysqli_query($koneksi, $sql);

                $i = 1;

                while ($a = mysqli_fetch_array($qry)) {
                    echo "<tr>";
                    echo "<td>$i.</td>";
                    echo "<td>$a[user_idgame]</td>";
                    echo "<td>$a[user_servergame]</td>";
                    echo "<td>$a[nominal_pembelian]</td>";
                    echo "<td>$a[jumlah_pembelian]</td>";
                    echo "<td>$a[Metode_pembayaran]</td>";
                    echo "<td>
                            <a href=\"editpc.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Edit</a>
                            <a href=\"hapuspc.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Hapus</a>
                            </td>";
                    echo "</tr>";
                    $i++;
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>