<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #4ecca3, #1f9c8f);
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            background-color: #ffffff;
            transition: transform 0.2s;
        }
        .login-container:hover {
            transform: scale(1.05);
        }
        .login-container h3 {
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
            color: #2c3e50;
        }
        .form-control {
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #4ecca3;
        }
        .btn {
            border-radius: 20px;
            padding: 12px;
            font-size: 16px;
            transition: background-color 0.3s;
            background-color: #1f9c8f; /* Button color */
            color: white; /* Button text color */
        }
        .btn:hover {
            background-color: #148f7d; /* Darker shade on hover */
        }
        .text-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-container">
            <h3 class="text-center">Welcome Back!</h3>
            <form action="proses_login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="login" class="btn">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
