<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Input NIM</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header bg-dark text-white">
                <h2 class="text-center">Input NIM</h2>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('PresensiController/proses_presensi'); ?>">
                    <div class="form-group">
                        <label for="nim">NIM:</label>
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Presensi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you need JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
