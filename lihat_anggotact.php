<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kontak Kami</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Kontak Kami</h1>

        <a href="inputct.php" class="btn btn-primary mb-3">+ Tambah data</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Tipe Kontak</th>
                <th>username</th>
                <th>No WhatsApp</th>
                <th>Deskripsi</th>
                <th>aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                $sql = "SELECT * FROM contact ORDER BY id";
                $qry = mysqli_query($koneksi, $sql);

                $i = 1;

                while ($a = mysqli_fetch_array($qry)) {
                    echo "<tr>";
                    echo "<td>$i.</td>";
                    echo "<td>$a[tipekontak]</td>";
                    echo "<td>$a[username]</td>";
                    echo "<td>$a[nowhatsapp]</td>";
                    echo "<td>$a[deskripsi]</td>";
                    echo "<td>
                            <a href=\"editct.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Edit</a>
                            <a href=\"hapusct.php?id=$a[id]\" class=\btn btn-sm btn-warning\">Hapus</a>
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