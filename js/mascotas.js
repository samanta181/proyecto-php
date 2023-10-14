

var pathRequestControl = './api/mascotas/mascotas.php?action=';


getMascotas();
 getPropietario();
function getMascotas() {

    $.ajax({
        url: pathRequestControl + 'listarM',
        type: "get",
        beforeSend: function () {
            $('#spinner').css('display', 'block'); // Mostrar el spinner
          },
        success: function (data) {
            $('#spinner').css('display', 'none'); // Mostrar el spinner
            $('#mascotaTable').DataTable({
                data: data,
                columns: [
                    { data: 'id_mascotas', title: 'ID' },
                    { data: 'nombre_mascota', title: 'Nombre' },
                    { data: 'dni_propietario', title: 'DUEÑO' },
                    { data: 'sexo', title: 'SEXO' },
                    { data: 'especie', title: 'ESPECIE' },
                    { data: 'edad_mascota', title: 'EDAD' },
                    { data: 'tamanio_mascota', title: 'TAMAÑO' },
 
                ],
            })
        }
    });
}

function getPropietario() {

  $.ajax({
      url: pathRequestControl + 'listarP',
      type: "get",
      beforeSend: function () {
          $('#spinner').css('display', 'block'); // Mostrar el spinner
        },
      success: function (data) {
          $('#spinner').css('display', 'none'); // Mostrar el spinner
          $('#propietarioTable').DataTable({
              data: data,
              columns: [
                  { data: 'id_dueño', title: 'ID' },
                  { data: 'nombre_dueño', title: 'Nombre' },
                  { data: 'ape_pat_dueño', title: 'DUEÑO' },
                  { data: 'ape_mat_dueño', title: 'TIPO' },
                  { data: 'dni_dueño', title: 'DNI' },
                  { data: 'domicilio_dueño', title: 'DOMICILIO' },
                  { data: 'celular_dueño', title: 'CELULAR' },
              ],
          })
      }
  });
}

function  registrarPropietario() {
    var n_dueño = document.getElementById("nombre_dueño").value;
    var ap_paterno_dueño = document.getElementById("ape_paterno_dueño").value;
    var ap_materno_dueño = document.getElementById("ape_mater_dueño").value;
    var dni = document.getElementById("dni").value;
    var celular = document.getElementById("celular").value;
    var domicilio = document.getElementById("domicilio").value;
  
    var urlguardar = './api/mascotas/mascotas.php';
    var parametros = {
      nombre_dueño: n_dueño,
      apellido_paterno_dueño: ap_paterno_dueño,
      apellido_materno_dueño: ap_materno_dueño,
      dni: dni,
      celular: celular,
     domicilio: domicilio
    };
  
    $.ajax({
      url: urlguardar,
      type: "POST",
      data: parametros,
      beforeSend: function () {
        
        $('#spinner').css('display', 'block'); // Mostrar el spinner
      },
      success: function (data) {
        $('#spinner').css('display', 'none'); // Mostrar el spinner
        limpiarCampos();  
        console.log(data.mensaje);
        alert(data.mensaje);
      }
    });
  }

  function  registrarMascotas() {
    var n_mascota = document.getElementById("mascota").value;
    var m_especie = document.getElementById("especie").value;
    var m_edad = document.getElementById("edad").value;
    var m_sexo = document.getElementById("sexo").value;
    var m_tamaño = document.getElementById("tamaño").value;
    var m_dni_dueño = document.getElementById("dni_dueño").value;
  
    var urlguardar = './api/mascotas/mascotas.php';
    var parametros = {
      n_mascota: n_mascota,
      m_especie: m_especie,
      m_edad: m_edad,
      m_sexo: m_sexo,
      m_tamaño: m_tamaño,
      m_dni_dueño: m_dni_dueño
    };
  
    $.ajax({
      url: urlguardar,
      type: "POST",
      data: parametros,
      beforeSend: function () {
        
        $('#spinner').css('display', 'block'); // Mostrar el spinner
      },
      success: function (data) {
        $('#spinner').css('display', 'none'); // Mostrar el spinner
        limpiarCampos();  
        console.log(data.mensaje);
        alert(data.mensaje);
      }
    });
  }

  function limpiarCampos() {
    document.getElementById("mascota").value = '';
    document.getElementById("especie").value = '';
    document.getElementById("edad").value = '';
    document.getElementById("sexo").value = '';
    document.getElementById("tamaño").value = '';
    document.getElementById("dni_dueño").value = '';
  }
  
  
