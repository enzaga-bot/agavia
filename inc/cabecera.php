
<section>
	<div id="disparadorMenu"></div>
		<header class="menuUp">
		<nav class="menu">
					<div class="container-menu">
						<div class="logo">
							<div class="logo_name">
								<a href="index.php?ver=home"><img id="logo_menu" src="img/logo.svg" alt="Logo"></a>
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
							<li><a href="index.php#"></a>Home</li>
							<li><a href="index.php#"></a>Story</li>
							<li><a href="index.php#"></a>Collection</li>
							<li><a href="index.php#"></a>Memebership</li>
							<li><a href="index.php#"></a>Contact</li>
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
