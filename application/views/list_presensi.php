<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Presensi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">List Presensi</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Status Presensi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($presensi_list as $presensi): ?>
                        <tr>
                            <td><?php echo $presensi->nim; ?></td>
                            <td><?php echo $presensi->nama; ?></td>
                            <td><?php echo $presensi->status; ?></td>
                            <td><?php echo $presensi->waktu; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you need JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
