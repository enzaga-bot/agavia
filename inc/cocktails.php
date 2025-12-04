<!-- Cita / frase de marca -->
<div class="quote" role="region" aria-label="Brand statement">
    <h3>
        Through our tequilas, we aim to connect people to their origins, to the aromas and flavors
        born from our land, and to a culture that continues to evolve without ever losing its essence.
    </h3>
</div><!--quote-->


<!-- Sección de cócteles -->
<div class="contieneCocktails" role="region" aria-labelledby="cocktails-heading">
    <div class="cajaCocktails">

        <div class="setentaTreinta">
            <div class="setenta">
                <h2 id="cocktails-heading">COCKTAILS</h2>

                <!-- Nombre del cóctel principal: referencia accesible -->
                <h4 id="nombreCoktailBg">Smoky Belle Paloma</h4>

                <!-- Imagen principal: la describimos con el nombre del cóctel -->
                <img
                    loading="lazy"
                    id="cocktailBg"
                    src="images/coktailsBg01.webp"
                    alt="Smoky Belle Paloma cocktail"
                    aria-describedby="nombreCoktailBg"
                >
            </div><!--setenta-->

            <div class="treinta" role="list" aria-label="Cocktail selection">
                <!-- Opción 1 -->
                <div class="cocktailSm" role="listitem">
                    <button
                        type="button"
                        class="cocktailSmBtn"
                        onclick='cambiarCoktail(1, "Smoky Belle Paloma")'
                        aria-label="Show Smoky Belle Paloma cocktail"
                        aria-pressed="true"
                    >
                        <img
                            loading="lazy"
                            src="images/coktailSm01.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <div class="tituloCoktailSm">Smoky Belle Paloma</div>
                    </button>
                </div><!--cocktailSm-->

                <!-- Opción 2 -->
                <div class="cocktailSm" role="listitem">
                    <button
                        type="button"
                        class="cocktailSmBtn"
                        onclick='cambiarCoktail(2, "Rosemay Winter")'
                        aria-label="Show Rosemay Winter cocktail"
                        aria-pressed="false"
                    >
                        <img
                            loading="lazy"
                            src="images/coktailSm02.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <div class="tituloCoktailSm">Rosemay Winter</div>
                    </button>
                </div><!--cocktailSm-->

                <!-- Opción 3 -->
                <div class="cocktailSm" role="listitem">
                    <button
                        type="button"
                        class="cocktailSmBtn"
                        onclick='cambiarCoktail(3, "Moody Cocktail Shoot")'
                        aria-label="Show Moody Cocktail Shoot"
                        aria-pressed="false"
                    >
                        <img
                            loading="lazy"
                            src="images/coktailSm03.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <div class="tituloCoktailSm">Moody Cocktail Shoot</div>
                    </button>
                </div><!--cocktailSm-->

                <!-- Opción 4 -->
                <div class="cocktailSm" role="listitem">
                    <button
                        type="button"
                        class="cocktailSmBtn"
                        onclick='cambiarCoktail(4, "Margarita Pastor")'
                        aria-label="Show Margarita Pastor cocktail"
                        aria-pressed="false"
                    >
                        <img
                            loading="lazy"
                            src="images/coktailSm04.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <div class="tituloCoktailSm">Margarita Pastor</div>
                    </button>
                </div><!--cocktailSm-->
            </div><!--treinta-->
        </div><!--setentaTreinta-->

    </div><!--cajaCocktails-->
</div><!--contieneCocktails-->

<script src="js/coktails.js"></script>
