<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Akun</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Data Akun</h1>

        <a href="inputjk.php" class="btn btn-primary mb-3">+ Tambah data</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>email</th>
                <th>password</th>
                <th>login</th>
                <th>hero</th>
                <th>paket joki</th>
                <th>metode pembayaran</th>
                <th>aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                $sql = "SELECT * FROM joki_ml ORDER BY id";
                $qry = mysqli_query($koneksi, $sql);

                $i = 1;

                while ($a = mysqli_fetch_array($qry)) {
                    echo "<tr>";
                    echo "<td>$i.</td>";
                    echo "<td>$a[email]</td>";
                    echo "<td>$a[password]</td>";
                    echo "<td>$a[login]</td>";
                    echo "<td>$a[hero]</td>";
                    echo "<td>$a[paket_joki]</td>";
                    echo "<td>$a[metode_pembayaran]</td>";
                    echo "<td>
                            <a href=\"editjk.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Edit</a>
                            <a href=\"hapusjk.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Hapus</a>
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