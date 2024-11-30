<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb); /* Dégradé bleu ciel */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 360px;
            padding: 20px;
            text-align: center;
        }
        .login-container h2 {
            font-size: 2rem;
            color: #0056b3;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-container input:focus {
            border-color: #0078ff;
            box-shadow: 0 0 8px rgba(0, 120, 255, 0.5);
        }
       .login-container button {
            width: 100%;
            background: linear-gradient(to right, #0078ff, #00e1ff);
            border: none;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            margin-top: 15px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .login-container button:hover {
            background: linear-gradient(to right, #00e1ff, #0078ff);
            transform: scale(1.05);
        }
        .input-group {
            position: relative;
            margin-bottom: 20px;
        }
        .input-group input {
            width: 240px;
            padding: 12px 40px 12px 15px; /* Place pour l'icône */
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .input-group input:focus {
            border-color: #0078ff;
            box-shadow: 0 0 8px rgba(0, 120, 255, 0.5);
        }
        .input-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #000000;
        }
        input::placeholder {
            color: #aaa;
            transition: color 0.3s ease;
        }
        input:focus::placeholder {
            color: transparent;
        }


        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)) : ?>
            <p class="error"><?= htmlspecialchars($error_message) ?></p>
        <?php endif; ?>
        <form action="LoginController/authenticate" method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            </div>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
