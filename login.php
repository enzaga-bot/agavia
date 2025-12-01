<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agavia Premium Distillers</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <link rel="stylesheet" href="css/login.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<body class="page-login">
    
    <div class="header-wrapper">
        <?php include 'inc/cabecera.php' ?>
    </div>

    <section class="login-full-page">
        
        <div class="login-glass-panel">
            
            <img src="img/logo.webp" alt="Logo Agavia" class="login-logo">            
            <form action="#" method="POST" class="login-form">
                
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Jhon123">
                </div>

                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="******">
                </div>

                <button type="submit" class="btn-login">Login</button>
                
            </form>

        </div></section>

</body>
</html>