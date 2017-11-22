// Obtener el modal
var Modal = document.getElementById('Id1');

// Clickear fuera del modal lo cierra 
window.onclick = function(event) {
    if (event.target == Modal) {
        Modal.style.display = "none";
    }
}