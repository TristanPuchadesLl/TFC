// Función para mostrar la tarjeta de contacto
function mostrarContacto() {
    var contacto = document.getElementById("contacto");
    if (contacto.style.display === "none" || contacto.style.display === "") {
        contacto.style.display = "block";
    } else {
        contacto.style.display = "none";
    }
}
