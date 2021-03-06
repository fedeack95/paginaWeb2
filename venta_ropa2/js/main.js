'use strict'

  let templateComentario;

  fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
      templateComentario = Handlebars.compile(template); // compila y prepara el template

      getComentarios();
  });
      

}

function getComentarios() {

    fetch("api/comentario")
    .then(response => {
      if (response.ok)
        return response.json();
      })
    .then(jsonComentarios => mostrarComentarios(jsonComentarios));
}

function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios

    };
    let html = templateComentario(context);
    document.querySelector("#container").innerHTML = html;
}
