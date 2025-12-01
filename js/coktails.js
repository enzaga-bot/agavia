

function cambiarCoktail(coktail, titulo) {
    const cocktailBg =  document.getElementById("cocktailBg");
    const nombreCoktailBg = document.getElementById("nombreCoktailBg");

   cocktailBg.src="images/coktailsBg0"+coktail+".webp";
    nombreCoktailBg.innerHTML = titulo;
}