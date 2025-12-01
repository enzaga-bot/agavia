
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
							<li><a href="index.php#">Home</a></li>
							<li><a href="index.php#">Story</a></li>
							<li><a href="index.php#">Collection</a></li>
							<li><a id="menuActiva" href="index.php#">Memebership</a></li>
							<li><a href="index.php#">Contact</a></li>
						</ul>
					</div>
				</nav>
		</header>
	</section>
	<script>
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
