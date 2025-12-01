	<article id="contieneSlider" class="contieneSeccion">

        <div class="slider" id="slider01">
            <div id="textoDiapo01" class="contieneTexto">
                <h2>AGAVIA</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates mollitia qui odit nemo explicabo porro officia</p>
                <div class="boton dorado"><a href="">Read More</a></div>
            </div><!--contieneTexto-->
            <picture>
                <source media="(min-width: 900px)" srcset="images/slide01.webp" loading="lazy" style="width:100%">
                <source media="(min-width: 550px)" srcset="images/slide01_med.webp">
                <source srcset="images/slide01_ch.webp">
                <img src="images/slide01.webp" name="slider" alt="" style="width:100%">
            </picture>
        </div>

        <div class="slider toque-slider02 diapoMovil" id="slider02">
               <div class="contieneTexto">
                    <h2>MEMBERSHIP</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates mollitia qui odit nemo explicabo porro officia</p>
                    <div class="boton dorado"><a href="">Read More</a></div>
                </div><!--contieneTexto-->
            <picture>
                <source media="(min-width: 900px)" srcset="images/slide02.webp" loading="lazy" style="width:100%">
                <source media="(min-width: 550px)" srcset="images/slide02_med.webp">
                <source srcset="images/slide02_ch.webp">
                <img src="images/slide02.webp" name="slider" alt="" style="width:100%">
            </picture>
        </div>

        <div class="slider toque-slider03 diapoMovil" id="slider03">
                <div class="contieneTexto">
                    <h2>OUR COLLECTION</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates mollitia qui odit nemo explicabo porro officia</p>
                    <div class="boton dorado"><a href="">Read More</a></div>
                </div><!--contieneTexto-->
            <picture>
                <source media="(min-width: 900px)" srcset="images/slide03.webp" loading="lazy" style="width:100%">
                <source media="(min-width: 550px)" srcset="images/slide03_med.webp">
                <source srcset="images/slide03_ch.webp">
                <img src="images/slide03.webp" name="slider" alt="" style="width:100%">
            </picture>
        </div>
        
        <div class="slider toque-slider04 diapoMovil" id="slider04">
                <div class="contieneTexto">
                    <h2>OUR STORY</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates mollitia qui odit nemo explicabo porro officia</p>
                    <div class="boton dorado"><a href="">Read More</a></div>
                </div><!--contieneTexto-->
            <picture>
                <source media="(min-width: 900px)" srcset="images/slide04.webp" loading="lazy" style="width:100%">
                <source media="(min-width: 550px)" srcset="images/slide04_med.webp">
                <source srcset="images/slide04_ch.webp">
                <img src="images/slide04.webp" name="slider" alt="" style="width:100%">
            </picture>
        </div>

	</article><!--contieneSeccion-->

    

<script>
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
</script>
