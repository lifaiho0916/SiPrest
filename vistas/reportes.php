  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <!-- <div class="col-sm-6">
                  <h4 class="m-0">Reporte por Cliente</h4>
              </div> -->
              <!-- /.col -->
              <!-- <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                      <li class="breadcrumb-item ">Reportes</li>
                      <li class="breadcrumb-item active">Por Cliente</li>
                  </ol>
              </div> -->
              <!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- PIVOT-->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info card-outline shadow ">
                      <div class="card-header">
                          <h3 class="card-title">Pivot General Prestamos</h3>

                      </div>
                      <div class=" card-body">
                          <!-- <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">
                                          <span class="small">Cliente:</span>
                                      </label>
                                      <select class="form-control form-control-sm js-example-basic-single" id="select_clientes" style="width: 100%"> </select>
                                      <div class="invalid-feedback">Seleccione un Cliente</div>
                                  </div>
                              </div>

                              <div class="col-md-8 d-flex flex-row align-items-center justify-content-end">
                                  <div class="form-group m-0"><a class="btn btn-primary btn-sm" style="width:120px;" id="btnFiltrar">Buscar</a></div>
                              </div>
                          </div><br> -->
                          <div class="col-12 table-responsive">
                              <table id="tbl_reporte_pivot"
                                  class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Año</th>
                                          <th>Enero</th>
                                          <th>Febrero</th>
                                          <th>Marzo</th>
                                          <th>Abril</th>
                                          <th>Mayo</th>
                                          <th>Junio</th>
                                          <th>Julio</th>
                                          <th>Agosto</th>
                                          <th>Set.</th>
                                          <th>Oct.</th>
                                          <th>Nov.</th>
                                          <th>Dic.</th>
                                          <th class="text-center">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody class="small text left">
                                  </tbody>
                              </table>

                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->




  <!-- USUARIO Y AÑO RESUMEN -->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info card-outline shadow ">
                      <div class="card-header">
                          <h3 class="card-title">Reporte resumen por Usuario y Año</h3>

                      </div>
                      <div class=" card-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">
                                          <span class="small">Usuario:</span>
                                      </label>
                                      <select class="form-control form-control-sm js-example-basic-single"
                                          id="select_usuario" style="width: 100%"> </select>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">
                                          <span class="small">Año:</span>
                                      </label>
                                      <select class="form-control form-control-sm js-example-basic-single"
                                          id="select_anio" style="width: 100%"> </select>

                                  </div>
                              </div>

                              <div class="col-md-4 d-flex flex-row align-items-center justify-content-end">
                                  <label for="">&nbsp;</label><br>
                                  <div class="form-group m-0">
                                      <a class="btn btn-info btn-sm" style="width:120px;" id="btnBuscar"><i
                                              class="fas fa-search"></i></a>
                                  </div>
                                  <!-- <button class="btn btn-info btn-sm" onclick="Listar_record_usuario();validar2();"><i class="fas fa-search"></i></button> -->
                              </div>
                          </div><br>

                          <div class="col-12 table-responsive">
                              <table id="tbl_reporte_record_usu"
                                  class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Año</th>
                                          <th>Mes</th>
                                          <th>Usuario</th>
                                          <th>Cant. Prest.</th>
                                          <th class="text-center">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody class="small text left">
                                  </tbody>
                              </table>

                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->


  <!-- PIVOT POR DIAS-->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info card-outline shadow ">
                      <div class="card-header">
                          <h3 class="card-title">Pivot Por Dias</h3>

                      </div>
                      <div class=" card-body">
                          <div class="row">

                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="">
                                          <span class="small">Fecha Inicio:</span>
                                      </label>
                                      <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i
                                                      class="far fa-calendar-alt"></i></span></div>
                                          <input type="date" class="form-control form-control-sm"
                                              data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
                                              id="text_fecha_I">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="">
                                          <span class="small">Fecha Fin:</span>
                                      </label>
                                      <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i
                                                      class="far fa-calendar-alt"></i></span></div>
                                          <input type="date" class="form-control form-control-sm"
                                              data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
                                              id="text_fecha_F">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-5 d-flex flex-row align-items-center justify-content-end">
                                  <div class="form-group m-0"><a class="btn btn-info btn-sm" style="width:120px;"
                                          id="btnFiltrar_pivotFec">Buscar</a></div>
                              </div>
                          </div><br>
                          <div class="col-12 table-responsive">
                              <table id="tbl_reporte_p_dias"
                                  class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Cliente</th>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                          <th>4</th>
                                          <th>5</th>
                                          <th>6</th>
                                          <th>7</th>
                                          <th>8</th>
                                          <th>9</th>
                                          <th>10</th>
                                          <th>11</th>
                                          <th>12</th>
                                          <th>13</th>
                                          <th>14</th>
                                          <th>15</th>
                                          <th>16</th>
                                          <th>17</th>
                                          <th>18</th>
                                          <th>19</th>
                                          <th>20</th>
                                          <th>21</th>
                                          <th>22</th>
                                          <th>23</th>
                                          <th>24</th>
                                          <th>25</th>
                                          <th>26</th>
                                          <th>27</th>
                                          <th>28</th>
                                          <th>29</th>
                                          <th>30</th>
                                          <th>31</th>
                                          <th>32</th>
                                          <th>T. Pres</th>
                                          <th>T. Pa</th>
                                          <th>T. Fal</th>
                                      </tr>
                                  </thead>
                                  <tbody class="small text left">
                                  </tbody>
                              </table>

                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

  <script>
var accion;
var tbl_reporte_pivot, tbl_reporte_record_usu, tbl_reporte_p_dias;

var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});


$(document).ready(function() {
    fechas();
    ReporteRecorUsuario();
    ReportePivotFechas();
    $('.js-example-basic-single').select2();

    /***************************************************************************
     * INICIAR DATATABLE REPORTE PIVOT
     ******************************************************************************/
    var tbl_reporte_pivot = $("#tbl_reporte_pivot").DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [{
                "extend": 'excelHtml5',
                "title": 'Reporte Pivot',
                "exportOptions": {
                    'columns': [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
                },
                "text": '<i class="fa fa-file-excel"></i>',
                "titleAttr": 'Exportar a Excel'
            },
            {
                "extend": 'print',
                "text": '<i class="fa fa-print"></i> ',
                "titleAttr": 'Imprimir',
                "exportOptions": {
                    'columns': [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
                },
                "download": 'open'
            },
            'pageLength',
        ],
        ajax: {
            url: "ajax/reportes_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 3
            }, //LISTAR 
        },
        /*columnDefs: [
          {
                targets: 8, //columna 2
                sortable: false, //no ordene
                render: function(data, type, full, meta) {
                    return "<center>" +
                        "<span class='btnEditarCliente  text-primary px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Editar Cliente'> " +
                        "<i class='fas fa-pencil-alt fs-6'></i> " +
                        "</span> " +
                        "<span class='btnEliminarCliente text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar Cliente'> " +
                        "<i class='fas fa-trash fs-6'> </i> " +
                        "</span>" +

                        "</center>"
                }
            }
        ],*/

        lengthMenu: [5, 10, 15, 20, 50],
        "pageLength": 10,
        "language": idioma_espanol,
        select: true
    });

    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR USUARIOS EN COMBO
    /*===================================================================*/
    $.ajax({
        url: "ajax/reportes_ajax.php",
        method: "POST",
        cache: false,
        //contentType: false,
        //processData: false,
        data: {
            'accion': 4
        },
        dataType: 'json',
        success: function(respuesta) {
            //console.log(respuesta);

            var options = '<option selected value="">Seleccione un usuario</option>';

            if (respuesta.length > 0) {
                for (let i = 0; i < respuesta.length; i++) {
                    options += "<option value='" + respuesta[i][0] + "'>" + respuesta[i][1] +
                        "</option>";
                }
                document.getElementById('select_usuario').innerHTML = options;
            } else {
                options += "<option value=''>No se encontraron datos</option>";
                // document.getElementById('select_usuario').innerHTML = options;


            }

            /* for (let index = 0; index < respuesta.length; index++) {
                 options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
             }
             $("#select_usuario").append(options);*/

        }
    });

    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR AÑOS DE PRESTAMOS EN COMBO
    /*===================================================================*/
    $.ajax({
        url: "ajax/reportes_ajax.php",
        method: "POST",
        cache: false,
        //contentType: false,
        //processData: false,
        data: {
            'accion': 5
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log(respuesta);

            var options = '<option selected value="">Seleccione un año</option>';

            if (respuesta.length > 0) {
                for (let i = 0; i < respuesta.length; i++) {
                    options += "<option>" + respuesta[i][0] + "</option>";
                }
                document.getElementById('select_anio').innerHTML = options;
            } else {
                options += "<option value=''>No se encontraron datos</option>";
                // document.getElementById('select_anio').innerHTML = options;


            }

            /*  for (let index = 0; index < respuesta.length; index++) {
                  options = options + '<option>' + respuesta[index][0] + '</option>';
              }
              $("#select_anio").append(options);*/

        }
    });




    /*===================================================================*/
    //FILTRAR AL DAR CLICK EN EL BOTON
    /*===================================================================*/
    $("#btnBuscar").on('click', function() {
        ReporteRecorUsuario();
        validar();

    })


    /*===================================================================*/
    //AL HACER CLIP EN EL BOTON BUSCAR PIVOT
    /*===================================================================*/
    $("#btnFiltrar_pivotFec").on('click', function() {
        ReportePivotFechas()
        validarFechas();

    })



});


////////////////////FUNCIONES///////////////////////////////

function ReporteRecorUsuario() {
    var id_usuario = document.getElementById('select_usuario').value;
    var anio = document.getElementById('select_anio').value;

    tbl_reporte_record_usu = $("#tbl_reporte_record_usu").DataTable({
        responsive: true,
        destroy: true,
        //retrieve: true,
        //searching: false,
        paging: false,
        async: false,
        processing: true,

        dom: 'Bfrtip',
        buttons: [{
                "extend": 'excelHtml5',
                "title": 'Reporte prestamos por usuario y año',
                "exportOptions": {
                    'columns': [1, 2, 3, 4, 5]
                },
                "text": '<i class="fa fa-file-excel"></i>',
                "titleAttr": 'Exportar a Excel'
            },
            {
                "extend": 'print',
                "text": '<i class="fa fa-print"></i> ',
                "titleAttr": 'Imprimir',
                "exportOptions": {
                    'columns': [1, 2, 3, 4, 5]
                },
                "download": 'open'
            },
            'pageLength',
        ],
        ajax: {
            url: "ajax/reportes_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 6,
                'id_usuario': id_usuario,
                'anio': anio

            }, //LISTAR 
        },
        lengthMenu: [0, 5, 10, 15, 20, 50],
        "pageLength": 10,
        "language": idioma_espanol,
        select: true
    });



}

/***************************************************************************
 * INICIAR DATATABLE REPORTE PIVOT POR DIAS
 ******************************************************************************/
function ReportePivotFechas() {
    fecha_ini = $("#text_fecha_I").val(); //capturamos el valor
    fecha_fin = $("#text_fecha_F").val();
    var tbl_reporte_p_dias = $("#tbl_reporte_p_dias").DataTable({
        responsive: true,
        destroy: true,
        async: false,
        processing: true,
        dom: 'Bfrtip',
        buttons: [{
                "extend": 'excelHtml5',
                "title": 'Reporte Pivot por Dias',
                "exportOptions": {
                    'columns': [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                        21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35
                    ]
                },
                "text": '<i class="fa fa-file-excel"></i>',
                "titleAttr": 'Exportar a Excel'
            },
            {
                "extend": 'print',
                "text": '<i class="fa fa-print"></i> ',
                "titleAttr": 'Imprimir',
                "exportOptions": {
                    'columns': [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                        21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35
                    ]
                },
                "download": 'open'
            },

        ],
        ajax: {
            url: "ajax/reportes_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 8,
                'fecha_ini': fecha_ini,
                'fecha_fin': fecha_fin,
            }, //LISTAR 
        },


        lengthMenu: [5, 10, 15, 20, 50],
        "pageLength": 10,
        "language": idioma_espanol,
        select: true
    });

}



function fechas() {
    var f = new Date();
    var anio = f.getFullYear();
    var mes = f.getMonth() + 1;
    var d = f.getDate();
    let primerDia = new Date(f.getFullYear(), f.getMonth() + 1, 0).getDate();
    if (d < 10) {
        d = '0' + d;
    }
    if (mes < 10) {
        mes = '0' + mes;
    }

    document.getElementById('text_fecha_I').value = anio + "-" + mes + "-" + d;
    document.getElementById('text_fecha_F').value = anio + "-" + mes + "-" + d;
}

function validarFechas() {

    var fecha_ini = document.getElementById('text_fecha_I').value;
    var fecha_fin = document.getElementById('text_fecha_F').value;

    if (fecha_ini.length == 0 || fecha_fin.length == 0) {

        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Seleccione una Fecha de inicio y de fin',
            showConfirmButton: true,
            timer: 1500
        })
        $("#text_fecha_I").focus();
        return false;
    }
    if (fecha_ini > fecha_fin) {
        Toast.fire({
            icon: 'error',
            title: ' La fecha de inicio no puede ser mayor a la fecha fin'
        })
        $("#text_fecha_I").focus();
        return false;
    }

}

function validar() {
    let id_usuario = document.getElementById('select_usuario').value;
    let anio = document.getElementById('select_anio').value;
    if (id_usuario.length == 0) {

        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Debe Seleccionar un Usuario',
            showConfirmButton: true,
            timer: 1500
        })
        $("#select_usuario").focus();
    }
    if (anio.length == 0) {
        Toast.fire({
            icon: 'error',
            title: ' Debe Seleccionar un Año'
        })
        $("#select_anio").focus();
    }
}




var idioma_espanol = {
    select: {
        rows: "%d fila seleccionada"
    },
    "sProcessing": "Procesando...",
    "sLengthMenu": "Ver _MENU_ ",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "No hay informacion en esta tabla",
    "sInfo": "Mostrando (_START_ a _END_) total de _TOTAL_ registros",
    "sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
    "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
    "SInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "<b>No se encontraron datos</b>",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Ultimo",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "aria": {
        "sSortAscending": ": ordenar de manera Ascendente",
        "SSortDescending": ": ordenar de manera Descendente ",
    }
}
  </script>