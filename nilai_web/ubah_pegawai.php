<!DOCTYPE html>
<html>
<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }
        h3 {
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
        }
        .form-control {
            margin-bottom: 15px;
            padding: 10px;
        }
        .btn-primary {
            background-color: #3498db;
            border: none;
            padding: 10px 15px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        label {
            font-weight: 500;
            color: #34495e;
        }
    </style>
    
    <title>Ubah Pegawai</title>
</head>
<body>

    <?php 
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($config, "SELECT * FROM pegawai WHERE Id = '".$_GET['Id']."'");
    $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>

    <h3>Ubah Pegawai</h3>

    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="Id" value="<?=$dt_pegawai['Id']?>">

        <label for="Nama">Nama:</label>
        <input type="text" name="Nama" id="Nama" value="<?=$dt_pegawai['Nama']?>" class="form-control">

        <label for="Nik">NIK:</label>
        <input type="text" name="Nik" id="Nik" value="<?=$dt_pegawai['Nik']?>" class="form-control">

        <label for="Jenis_kelamin">Jenis Kelamin:</label>
        <?php 
        $arr_gender = array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender): 
                $select = ($key_gender == $dt_pegawai['Jenis_kelamin']) ? "selected" : "";
            ?>
            <option value="<?=$key_gender?>" <?=$select?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>

        <label for="Alamat">Alamat:</label>
        <textarea name="Alamat" id="Alamat" class="form-control" rows="4"><?=$dt_pegawai['Alamat']?></textarea>

        <label for="Jabatan_id">Jabatan:</label>
        <select name="Jabatan_id" id="Jabatan_id" class="form-control">
            <option></option>
            <?php 
            $qry_jabatan = mysqli_query($config,"SELECT * FROM jabatan");
            while($data_jabatan = mysqli_fetch_array($qry_jabatan)){
                $select = ($data_jabatan['id'] == $dt_pegawai['Jabatan_id']) ? "selected" : "";
                echo '<option value="'.$data_jabatan['id'].'" '.$select.'>'.$data_jabatan['Nama_jabatan'].'</option>';
            }
            ?>
        </select>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?=$dt_pegawai['username']?>" class="form-control">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="" class="form-control">

        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary w-100">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
