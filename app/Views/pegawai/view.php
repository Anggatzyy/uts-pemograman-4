<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d3d3d3;
            /* Light gray background */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
        }

        .value {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-secondary {
            background-color: #ffd700;
            /* Yellow button */
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-secondary:hover {
            background-color: #ffc107;
            color: black;
        }

        .btn-secondary::before {
            content: '⬅';
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lihat Data Pegawai</h1>

        <div class="value">
            <span class="label">Nama:</span> <?= $pegawai['nama'] ?>
        </div>

        <div class="value">
            <span class="label">NIP:</span> <?= $pegawai['nip'] ?>
        </div>

        <div class="value">
            <span class="label">Jenis Kelamin:</span> <?= $pegawai['jenis_kelamin'] ?>
        </div>

        <div class="value">
            <span class="label">Departemen:</span> <?= $pegawai['departement'] ?>
        </div>

        <div class="value">
            <span class="label">Jabatan:</span> <?= $pegawai['jabatan'] ?>
        </div>

        <div class="value">
            <span class="label">Email:</span> <?= $pegawai['email'] ?>
        </div>

        <div class="value">
            <span class="label">Telephone:</span> <?= $pegawai['telephone'] ?>
        </div>

        <div class="btn-container">
            <a href="<?= base_url('pegawai') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>