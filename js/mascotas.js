

var pathRequestControl = './api/mascotas/mascotas.php?action=';


getMascotas();
function getMascotas() {

    $.ajax({
        url: pathRequestControl + 'listar',
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
                    { data: 'nombre_dueño', title: 'DUEÑO' },
                    { data: 'tipo', title: 'TIPO' }
                ],
            })
        }
    })
}
