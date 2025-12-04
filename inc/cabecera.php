<script>
    function openMembership(e) {
        // Evita que el enlace recargue la página o ponga el # en la URL
        if (e) {
            e.preventDefault();
            // Marca el disparador como expandido (si existe)
            if (e.currentTarget && e.currentTarget.setAttribute) {
                e.currentTarget.setAttribute('aria-expanded', 'true');
            }
        }

        // Muestra el modal
        var modal = document.getElementById('modalMembership');
        if (modal) {
            modal.style.display = 'flex';
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMembership() {
        var modal = document.getElementById('modalMembership');
        if (modal) {
            modal.style.display = 'none';
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = 'auto';
        }

        // Restablecer aria-expanded en posibles disparadores
        var membershipLink = document.getElementById('menuActiva');
        if (membershipLink) {
            membershipLink.setAttribute('aria-expanded', 'false');
        }
        var membershipBtn = document.getElementById('membership-trigger');
        if (membershipBtn) {
            membershipBtn.setAttribute('aria-expanded', 'false');
        }
    }

    // Cierra el modal si el usuario hace clic en el fondo
    window.onclick = function(event) {
        var modal = document.getElementById('modalMembership');
        if (event.target === modal) {
            closeMembership();
        }
    };

    /* menuUp ============================ */
    $(function menuUp() {
        $(window).scroll(function() {
            var menuUp = $(".menuUp");
            var windowHeight = $(window).scrollTop();
            var disparadorMenu = $("#disparadorMenu").offset();
            disparadorMenu = disparadorMenu.top;

            if (windowHeight >= disparadorMenu) {
                menuUp.addClass("fijarArriba");
            } else {
                menuUp.removeClass("fijarArriba");
            }
        });
    });
    //menuUp
</script>
