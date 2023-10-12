

var pathRequestControl = './api/companies/company.php?action=';


getCompanies();
function getCompanies() {

    $.ajax({
        url: pathRequestControl + 'listar',
        type: "get",
        success: function (data) {
            $('#companyTable').DataTable({
                data: data,
                columns: [
                    { data: 'id_company', title: 'ID' },
                    { data: 'nombre_company', title: 'Nombre' },
                    { data: 'ruc_company', title: 'RUC' },
                    { data: 'telefono', title: 'TELEFONO' }
                ],
            })
        }
    })
}
