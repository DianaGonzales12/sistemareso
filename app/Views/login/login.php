<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
        }

        .login-container {
            display: flex;
            height: 100vh;
        }

        .left-section {
            background-color: #0066cc;
            width: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            position: relative;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-section {
            background-color: white;
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
        }

        .form-container {
            width: 100%;
            max-width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            padding: 15px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #0066cc;
        }

        .form-group input[type="checkbox"] {
            display: inline-block;
            width: auto;
            margin-right: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2389e2;
            color: white;
            border: none;
            border-radius: 9px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005bb5;
        }

        .form-group .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #555;
            font-size: 14px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-section">
            <img src="images/login.png" alt="Municipalidad">
        </div>
        <div class="right-section">
            <div class="form-container">
                <h2>Iniciar Sesión</h2>
                <form action="<?= base_url('/dashboard') ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="username" id="username" required placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" required placeholder="Contraseña">
                    </div>
                    <div class="form-group remember-me">
                        <label>
                            <input type="checkbox" name="remember"> Recordar contraseña </label>
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
