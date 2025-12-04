<div id="ageGate" 
     class="age-gate-overlay" 
     role="dialog" 
     aria-modal="true" 
     aria-labelledby="ageGateHeading" 
     aria-describedby="ageGateDescription">
    
    <video autoplay muted loop playsinline id="ageVideoBackground" aria-hidden="true">
        <source src="videos/blurage.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>

    <div class="age-gate-content">
        <img src="img/logo.webp" alt="Agavia Logo" class="age-logo">
        
        <h2 id="ageGateHeading">Are you of drinking age?</h2>

        <!-- Descripción breve para tecnologías de asistencia -->
        <p id="ageGateDescription">
            To enter this site, you must confirm that you are of legal drinking age in your country.
        </p>
        
        <div class="age-buttons">
            <button id="btnYes" class="boton dorado" aria-label="Yes, I am of legal drinking age">Yes</button>
            <button id="btnNo" class="boton gris" aria-label="No, I am not of legal drinking age">No</button>
        </div>
        
        <p id="mensaje-rechazo" 
           style="display:none; color: red; margin-top: 10px; font-size: 0.9rem;"
           aria-live="polite">
            You must be of legal drinking age to enter this site.
        </p>
    </div>
</div>

<script>
// El Script sigue siendo exactamente el mismo
document.addEventListener("DOMContentLoaded", function() {
    const ageGate = document.getElementById('ageGate');
    const btnYes = document.getElementById('btnYes');
    const btnNo = document.getElementById('btnNo');
    const mensaje = document.getElementById('mensaje-rechazo');
    const body = document.body;

    if (localStorage.getItem('agavia_age_verified') === 'true') {
        ageGate.style.display = 'none';
    } else {
        body.style.overflow = 'hidden'; 
    }

    btnYes.addEventListener('click', function() {
        localStorage.setItem('agavia_age_verified', 'true');
        ageGate.style.opacity = '0';
        body.style.overflow = 'auto';
        setTimeout(() => {
            ageGate.style.display = 'none';
        }, 500);
    });

    btnNo.addEventListener('click', function() {
        mensaje.style.display = 'block';
        // window.location.href = "https://www.google.com";
    });
});
</script>
