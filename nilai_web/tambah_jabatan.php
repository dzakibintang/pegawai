<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e9f1f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 500px;
            width: 100%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        h3 {                      
            font-weight: 600;
            color: #3b3b3b;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
            outline: none;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
            padding: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 10px;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        label {
            font-weight: 500;
            color: #555;
        }

        .button-group {
            display: flex;
            justify-content: center;
        }
    </style>
    <title>Tambah Jabatan</title>
</head>
<body>

    <div class="container">
        <h3>Tambah Jabatan</h3>

        <form action="proses_tambah_jabatan.php" method="post">
            <div class="form-group">
                <label for="Nama_jabatan">Nama Jabatan :</label>
                <input type="text" name="Nama_jabatan" id="Nama_jabatan" class="form-control" placeholder="Masukkan nama jabatan" required>
            </div>
            
            <div class="form-group">
                <label for="Gaji_pokok">Gaji Pokok :</label>
                <input type="number" name="Gaji_pokok" id="Gaji_pokok" class="form-control" placeholder="Masukkan gaji pokok" required>
            </div>
            
            <div class="form-group">
                <label for="Tunjangan">Tunjangan :</label>
                <input type="number" name="Tunjangan" id="Tunjangan" class="form-control" placeholder="Masukkan tunjangan" required>
            </div>

            <div class="button-group">
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah Jabatan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
