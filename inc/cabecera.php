


	<!-- Scroll Suave -->
<script>

    	$(document).on("ready",function(){

            $(function () {
                $(".link-scroll").on("click", function (e) {
                    e.preventDefault();
                    const targetSelector = $(this).data("target");
                    const $target = $(targetSelector);
                    if ($target.length) {
                        $("html, body").animate({
                            scrollTop: $target.offset().top
                        }, 1500);
                    }
                });
            });

		});


</script>


    
<section>
	<div id="disparadorMenu"></div>
		<header class="menuUp">
		<nav class="menu">
					<div class="container-menu">
						<div class="logo">
							<div class="logo_name">
								<a href="index.php?ver=home"><img id="logo_menu" src="img/logoHorizontal.webp" alt="Logo"></a>
							</div>
							<div class="icon-menu">
								<a id="btn-menu" class="btn-menu">
									<img id="01" class="visible" src="img/menu.png" alt="logo">
									<img id="02" class="invisible" src="img/cerrar.png" alt="cerrar">
								</a>
							</div>
						</div>
					</div>

					<div class="menu-link">
						<ul>
                            <li><a id="menuHome" class="link-scroll" data-target="#contieneSlider">Home</a></li>
                            <li><a id="menuStory" class="link-scroll" data-target="#seccionStory">Story</a></li>
                            <li><a id="menuCollection" class="link-scroll" data-target="#seccionCollection">Collection</a></li>
                            <li><a id="menuActiva" onclick="openMembership(event)">Membership</a></li>
                            <li><a id="menuContact" class="link-scroll" data-target="#seccionContacto">Contact</a></li>
                        </ul>

					</div>
				</nav>
		</header>
	</section>

    
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
