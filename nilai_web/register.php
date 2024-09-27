<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: #ffffff;
        }

        .card-header {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
            padding: 12px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        .btn {
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            color: white;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #00c6ff);
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #0092ff);
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="proses_register.php" method="post">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama :</label>
                        <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="NIK" class="form-label">NIK :</label>
                        <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Masukkan NIK" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="No_tlp" class="form-label">No Telepon :</label>
                        <input type="text" name="No_tlp" id="No_tlp" class="form-control" placeholder="Masukkan nomor telepon" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="Jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                        <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat :</label>
                        <textarea name="Alamat" id="Alamat" class="form-control" rows="4" placeholder="Masukkan alamat Anda" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="id" class="form-label">Jabatan :</label>
                        <select name="id" id="id" class="form-control" required>
                            <option value="" disabled selected>Pilih jabatan</option>
                            <?php 
                            include "koneksi.php";
                            $qry_jabatan = mysqli_query($config, "select * from jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['Nama_jabatan'].'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                    
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 Your Company Name</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
