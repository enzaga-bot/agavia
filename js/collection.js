
const botellas = document.querySelectorAll(".botella");

function cambiarClaseActiva() {
  botellas.forEach(b => {
    b.classList.remove("activa");
    b.classList.add("inactiva");
  });

  this.classList.remove("inactiva");
  this.classList.add("activa");
}

botellas.forEach(b => {
  b.addEventListener("click", cambiarClaseActiva);
});
