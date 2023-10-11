

var pathRequestControl = './api/usuarios/users.php?action=';


getUsers();
function getUsers() {

  $.ajax({
    url: pathRequestControl + 'listar',
    type: "get",
    success: function (data) {
      $('#userTable').DataTable({
        data: data,
        columns: [
          {data: 'id_user', title: 'ID'},
          {data: 'name_user', title: 'Nombre'},
          {data: 'apep_user', title: 'Apellido Paterno'},
          {data: 'apem_user', title: 'Apellido Materno'}
        ],
        scrollCollapse: true,
        scrollY: '450px',
        pageLength: 10,
        language: {
          buttons: {
            colvis: 'Visibilidad de Columnas',
            colvisRestore: 'Restaurar',
          },
          search: "Buscar",
          "info": "Mostrando _START_ al _END_ de _TOTAL_ registros",
          "infoEmpty": "Mostrando 0 al 0 de 0 registros",
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          }

        },
        dom: 'Blfrtip',
        buttons: [
          {
              extend: 'excel',
              text: '<i class="fas fa-file-excel"></i> Exportar a Excel',
              title: 'Mis usuarios',
              autoFilter: true,
              exportOptions: {
                  format: {
                      body: function (data, row, column, node) {
                          // Forzar que todos los datos se traten como texto
                          return 'ㅤ' + data;
                      }
                  },
                  alignment: 'left'
              },

              filename: 'Reporte_Servicios',
          },
          /* {
              extend: 'pdf',
              text: '<i class="fas fa-file-pdf"></i> PDF',
              title: 'Lista de Pacientes',
              messageBottom: null
          }, */
          {
              extend: 'print',
              text: '<i class="fas fa-file-pdf"></i> PDF',
              title: 'Mis usuarios',
              exportOptions: {
                  columns: ':visible'
              }
          },
          'colvis'
      ]
,      
        
      });
      $('.dataTables_info').contents().filter(function () {
        return this.nodeType === 3;
      }).replaceWith(function () {
        return $(this).text().replace(/(\d+)/g, '  $1 ');

      });
    }
    ,
    error: function (jqXHR, textStatus, errorThrown) {
      console.log('Error en la solicitud AJAX:', textStatus, errorThrown);
    }
  });
}
