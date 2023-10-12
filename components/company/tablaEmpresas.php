
<head>
<!-- todos etos scipts son para el datatable -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<style>
        .dataTables_paginate a {
            cursor: pointer;
            margin: 2px;
        }

        .dataTables_length {
            margin-bottom: 12px;
        }

        .dataTables_wrapper .dataTables_length .dataTables_select {
            display: inline-block;
            margin-right: 10px;
        }

        .dataTables_wrapper .dataTables_buttons {
            margin-bottom: 12px;
        }

        .dt-buttons {
            display: inline-block;
            margin-right: 10px;
            float: right !important;
        }

        .dt-buttons .buttons-excel {
            border-radius: 4px;
        }

        .dt-buttons .buttons-excel .fa-file-excel {
            color: #0da71a;
        }

        .dt-buttons .buttons-print .fa-file-pdf {
            color: #ff0505;
        }

        #tablaDatos_filter {
            margin-right: 10px;
        }
    </style>

<body>
    <table id="companyTable" class="table table-hover table-sm">
        
    </table>

   
</body>