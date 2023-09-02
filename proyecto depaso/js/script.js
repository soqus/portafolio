

function toggleLinks() {
    var opciones = document.getElementById("opciones");
    opciones.classList.toggle("mostrar");
}

// Obtener el enlace y las opciones desplegables por sus identificadores
const enlace = document.getElementById("desplegarEnlace");
const opcionesDesplegables = document.getElementById("opcionesDesplegables");

// Agregar un evento al enlace para desplegar las opciones
enlace.addEventListener("click", function() {
  // Cambiar el estilo de las opciones para mostrarlas o ocultarlas
  if (opcionesDesplegables.style.display === "none") {
    opcionesDesplegables.style.display = "block";
  } else {
    opcionesDesplegables.style.display = "none";
  }
});
