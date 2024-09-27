<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f3;
            color: #34495e;
        }
        h3 {
            text-align: center;
            margin: 40px 0;
            font-size: 2.5rem;
            font-weight: 600;
            color: #2980b9;
        }
        .container {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        thead {
            background-color: #2980b9;
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border-bottom: 1px solid #ccc;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #d1e7dd;
        }
        .gaji-total {
            background-color: #27ae60; /* Bright color for total salary */
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #3498db;
            border: none;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }
        .btn-success, .btn-danger {
            padding: 8px 12px;
            border-radius: 5px;
        }
        .btn-success {
            background-color: #2ecc71; /* Bright green */
            border: none;
        }
        .btn-success:hover {
            background-color: #27ae60; /* Darker green on hover */
        }
        .btn-danger {
            background-color: #e74c3c; /* Red */
            border: none;
        }
        .btn-danger:hover {
            background-color: #c0392b; /* Darker red on hover */
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>

    <title>Daftar Pegawai</title>
</head>
<body>

    <h3>Daftar Pegawai</h3>
    
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIK</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Jabatan</th>
                    <th>Gaji Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_pegawai = mysqli_query($config, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.Jabatan_id = jabatan.id");
                $no = 0;
                while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                    $no++;
                    $gaji_total = $data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'];
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pegawai['Nama'] ?></td>
                    <td><?= $data_pegawai['Nik'] ?></td>
                    <td><?= $data_pegawai['No_tlp'] ?></td>
                    <td><?= $data_pegawai['Alamat'] ?></td>
                    <td><?= $data_pegawai['Jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                    <td><?= $data_pegawai['username'] ?></td>
                    <td><?= $data_pegawai['Nama_jabatan'] ?></td>
                    <td class="gaji-total"><?= number_format($gaji_total, 0, ',', '.') ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="ubah_pegawai.php?Id=<?= $data_pegawai['Id'] ?>" class="btn btn-success">Ubah</a> 
                            <a href="hapus.php?Id=<?= $data_pegawai['Id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="register.php" class="btn btn-primary w-100 mt-3">Tambah Pegawai</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
