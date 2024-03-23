var btnEliminar = document.getElementById("btnEliminar");
var modalEliminacion = document.getElementById("modalEliminacion");
var btnConfirmar = document.getElementById("btnConfirmar");
var btnCancelar = document.getElementById("btnCancelar");

btnEliminar.addEventListener("click", function (e) {
  e.preventDefault();
  modalEliminacion.style.display = "block";

  btnConfirmar.onclick = function () {
    window.location.href = btnEliminar.href;
  };

  btnCancelar.onclick = function () {
    modalEliminacion.style.display = "none";
  };
});
