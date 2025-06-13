
  function cargarFormulario(url) {
    const contenedor = document.getElementById('contenedor-formulario');
    contenedor.innerHTML = '<div class="text-center">Cargando...</div>';

    fetch(url)
      .then(response => {
        if (!response.ok) throw new Error('Error al cargar el formulario');
        return response.text();
      })
      .then(html => {
        contenedor.innerHTML = html;
      })
      .catch(error => {
        contenedor.innerHTML = `<div class="alert alert-danger">Ocurrió un error: ${error.message}</div>`;
      });
  }
