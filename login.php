<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agavia</title>
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
            
            <div id="login-state-form">
                <img src="img/logo.webp" alt="Logo" class="login-logo">
                <form class="login-form">
                    <div class="input-group">
                        <label>Username:</label>
                        <input type="text" placeholder="Jhon123">
                    </div>
                    <div class="input-group">
                        <label>Password:</label>
                        <input type="password" placeholder="******">
                    </div>
                    <button type="button" id="btn-start-purchase" class="btn-login">Login</button>
                </form>
            </div>

  

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnStart = document.getElementById('btn-start-purchase');
            const stateForm = document.getElementById('login-state-form');
            const stateLoading = document.getElementById('login-state-loading');

            btnStart.addEventListener('click', function() {
                // 1. Mostrar spinner
                stateForm.style.display = 'none';
                stateLoading.style.display = 'block';
                
                // 2. Esperar 4 segundos y REDIRIGIR
                setTimeout(function() {
                    // Cambia 'welcome.php' por el nombre que quieras
                    window.location.href = 'welcome.php'; 
                }, 4000);
            });
        });

    document.addEventListener("DOMContentLoaded", function() {
        const btnLogin = document.querySelector('.btn-login');

        btnLogin.addEventListener('click', function(e) {
            e.preventDefault(); // Evita que recargue si es submit
            // Simplemente nos lleva a la pantalla de pago
            window.location.href = 'payment.php';
        });
    });

    </script>
</body>
</html>