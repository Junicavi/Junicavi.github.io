// Obtener el modal
var Modal = document.getElementById('Id1');

// Clickear fuera del modal lo cierra 
window.onclick = function(event) {
    if (event.target == modal) {
        Modal.style.display = "none";
    }
}