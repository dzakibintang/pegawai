<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #34495e;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            font-size: 2rem;
            color: #e67e22;
            margin: 0;
        }
        p {
            font-size: 1.2rem;
            margin-top: 20px;
        }
        footer {
            margin-top: 30px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <?php include "header.php"; ?>

    <div class="container">
        <h2>Selamat datang <?= $_SESSION['nama_pegawai'] ?> di website ini.</h2>
        <p>Temukan berbagai informasi dan layanan yang kami tawarkan.</p>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>
