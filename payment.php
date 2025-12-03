<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Agavia</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <style>
        .success-icon i {
            color: #28a745 !important; /* Color Verde Éxito */
            font-size: 7rem !important; /* Icono GRANDE */
            display: inline-block;
            /* Animación de pulso */
            animation: pulse-arrow 2s infinite ease-in-out; 
            /* Separación extra hacia abajo */
            margin-bottom: 40px; 
        }

        /* Definición de la animación */
        @keyframes pulse-arrow {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.15); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>

<body class="page-login">
    
    <div class="header-wrapper">
        <?php include 'inc/cabecera.php' ?>
    </div>

    <section class="login-full-page payment-bg">
        
        <div class="login-glass-panel payment-panel">
            
            <div id="payment-state-form">
                
                <h2>Please enter your bank details.</h2>
                
                <div class="card-visual">
                    <img src="images/goldcard.webp" alt="Credit Card Preview">
                </div>

                <form class="payment-form">
                    
                    <div class="input-group">
                        <label>Full name:</label>
                        <input type="text" placeholder="Jhon Nolan" value="Jhon Nolan">
                    </div>

                    <div class="input-group">
                        <label>Credit Card Number:</label>
                        <input type="text" placeholder="4526 2536 xxxx xxxx">
                    </div>

                    <div class="row-inputs">
                        <div class="input-group half">
                            <label>Exp. Date:</label>
                            <input type="text" placeholder="12/27">
                        </div>
                        <div class="input-group half">
                            <label>CVV:</label>
                            <input type="password" placeholder="***">
                        </div>
                    </div>

                    <div class="input-group">
                        <label>Address:</label>
                        <input type="text" placeholder="344 E 3rd St, Long Beach, CA">
                    </div>

                    <button type="button" id="btn-purchase" class="btn-login">Purchase</button>
                    
                    <p class="disclaimer" style="margin-top: 15px;">The membership contract is subject to a one-year term with monthly payments.</p>
                </form>
            </div>

            <div id="payment-state-loading" style="display: none;">
                <div class="spinner-spacer"></div> 
                <div class="spinner-container">
                    <div class="loading-spinner"></div>
                </div>
                <p class="loading-text">Wait until the purchasing it's done</p>
            </div>

            <div id="payment-state-success" style="display: none;">
                <div class="spinner-spacer"></div>
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Purchase completed!</h3>
                <p class="success-text">Welcome aboard to Agavia's premier exclusive community.</p>
                
                <a href="https://danielmeza2599.github.io/PruebasSesionUsuarioAgavia/" class="btn-login" style="margin-top: 30px; display:inline-block; text-decoration:none;">Details</a>
            </div>

        </div>

    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnPurchase = document.getElementById('btn-purchase');
            const stateForm = document.getElementById('payment-state-form');
            const stateLoading = document.getElementById('payment-state-loading');
            const stateSuccess = document.getElementById('payment-state-success');
            
            const glassPanel = document.querySelector('.login-glass-panel');

            btnPurchase.addEventListener('click', function() {
                // 1. Ocultar formulario
                stateForm.style.display = 'none';
                
                // 2. MOSTRAR SPINNER Y ENCOGER PANEL
                stateLoading.style.display = 'block';
                glassPanel.classList.add('loading-active'); 
                
                // 3. Esperar 4 segundos
                setTimeout(function() {
                    // Ocultar Loading -> Mostrar Éxito
                    stateLoading.style.display = 'none';
                    stateSuccess.style.display = 'block';
                }, 4000);
            });
        });
    </script>

</body>
</html>