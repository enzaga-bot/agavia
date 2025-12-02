
                function accionNoMovil() {
                
                const textoDiapo01 = document.getElementById('textoDiapo01');
                const sliders = document.querySelectorAll('#slider02, #slider03, #slider04');

                function activarTexto() {
                    textoDiapo01.classList.add('mueveTextoDiapo01');
                }

                function desactivarTexto() {
                    textoDiapo01.classList.add('regresaTextoDiapo01');
                    textoDiapo01.classList.remove('mueveTextoDiapo01');
                    
                    setTimeout(function () {
                    textoDiapo01.classList.remove('regresaTextoDiapo01');
                    }, 1000);
                        
                }

                sliders.forEach(slider => {
                    slider.addEventListener('mouseenter', activarTexto);
                    slider.addEventListener('mouseleave', desactivarTexto);
                });

    }

    // Función para móviles
    function accionMovil() {
        console.log("El usuario está en un dispositivo móvil");
        
        const diapo04 = document.getElementById("slider04");
        const textoSeccionMovil04 = document.getElementById("textoSeccionMovil04");
        const imagenSliderSm04 = document.getElementById("imagenSliderSm04");
        const textoSliderSm04 = document.getElementById("textoSliderSm04");

        function cambiaDiapo04() {
            // Si el texto principal está visible (o sin display definido), lo ocultamos
            const textoVisible = textoSeccionMovil04.style.display !== "none";

            if (textoVisible) {
                // Estado "clicado": ocultamos el texto de sección y mostramos imagen + texto small
                textoSeccionMovil04.style.display = "none";
                imagenSliderSm04.style.display = "block";
                textoSliderSm04.style.display = "block";
                diapo04.style.transform = "translateX(0)";
            } else {
                // Estado original: mostramos el texto de sección y ocultamos imagen + texto small
                textoSeccionMovil04.style.display = "block";
                imagenSliderSm04.style.display = "none";
                textoSliderSm04.style.display = "none"; 
                diapo04.style.transform = "translateX(93%)";
            }
        }

        diapo04.addEventListener('click', cambiaDiapo04);

        // Aquí tu código para móviles
        


    }

    // Helper
    function ejecutarSegunDispositivo(callbackNoMovil, callbackMovil) {
        const esMovil = /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini|mobile/i
            .test(navigator.userAgent.toLowerCase());

        if (!esMovil && typeof callbackNoMovil === "function") {
            callbackNoMovil();
        } else if (esMovil && typeof callbackMovil === "function") {
            callbackMovil();
        }
    }

    ejecutarSegunDispositivo(accionNoMovil, accionMovil);


