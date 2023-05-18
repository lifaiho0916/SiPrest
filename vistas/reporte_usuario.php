  <!--POR USUARIO -->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info card-outline shadow ">
                      <div class="card-header">
                          <h3 class="card-title">Reporte por Usuarios</h3>

                      </div>
                      <div class=" card-body">
                        <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">
                                            <span class="small">Usuario:</span>
                                        </label>
                                        <select class="form-control form-control-sm js-example-basic-single" id="select_usuarios" style="width: 100%"> </select>
                                        <div class="invalid-feedback">Seleccione un Cliente</div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">
                                            <span class="small">Fecha Inicio:</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                            <input type="date" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="text_fecha_I">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">
                                            <span class="small">Fecha Fin:</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                            <input type="date" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="text_fecha_F">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex flex-row align-items-center justify-content-end">
                                    <div class="form-group m-0"><a class="btn btn-primary btn-sm" style="width:120px;" id="btnFiltrar">Buscar</a></div>
                                </div>

                            </div><br>
                          <div class="col-12 table-responsive">
                              <table id="tbl_report_usuario" class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Nro Prestamo</th>
                                          <th class="all">Cliente</th>
                                          <th>Monto</th>
                                          <th>Fecha</th>
                                          <th>Total</th>
                                          <th>Cuota</th>
                                          <th>Nro. Cuota</th>
                                          <th>F. Pago</th>
                                          <th>Estado</th>
                                          <!-- <th class="text-cetner">Opciones</th> -->
                                      </tr>
                                  </thead>
                                  <tbody class="small text left">
                                  </tbody>
                                  <tfoot>
                              <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th>Total:</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                          </tfoot>
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
      var tbl_report_usuario;

      var Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 3000
      });

      $(document).ready(function() {
        fechas() ;
        ReportePorUsuario();  
        $('.js-example-basic-single').select2();
        
        
        
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
                          options += "<option value='" + respuesta[i][0] + "'>" + respuesta[i][1] + "</option>";
                      }
                      document.getElementById('select_usuarios').innerHTML = options;
                  } else {
                      options += "<option value=''>No se encontraron datos</option>";
                     // document.getElementById('select_usuario').innerHTML = options;
                  }

              }
          });
        
        
          $("#btnFiltrar").on('click', function() {
            ReportePorUsuario();
              validar();

          })
        
        
        
        
        
        
        }) //// fin document ready;







    function ReportePorUsuario() {
          var  fecha_ini = $("#text_fecha_I").val(); //capturamos el valor
          var  fecha_fin = $("#text_fecha_F").val();
          var id_usu = $("#select_usuarios").val();

        tbl_report_usuario = $("#tbl_report_usuario").DataTable({
              responsive: true,
              destroy: true,
              async: false,
             processing: true,

              dom: 'Bfrtip',
              buttons: [{
                      "extend": 'excelHtml5',
                      "title": 'Reporte de Prestamos por Usuario',
                      "exportOptions": {
                          'columns': [1,3,4,5,6,7, 8,10,11]
                      },
                      "text": '<i class="fa fa-file-excel"></i>',
                      "titleAttr": 'Exportar a Excel'
                  },
                  {
                      "extend": 'print',
                      "text": '<i class="fa fa-print"></i> ',
                      "titleAttr": 'Imprimir',
                      "exportOptions": {
                          'columns': [1,3,4,5,6,7, 8,10,11]
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
                      'accion': 7,
                      'fecha_ini': fecha_ini,
                    'fecha_fin': fecha_fin,
                    'id_usuario': id_usu
                  }, //LISTAR 
              },
              columnDefs: [
                  {
                        targets: 8,
                        //sortable: false,
                        createdCell: function(td, cellData, rowData, row, col) {

                            if (rowData[8] == 'aprobado') {
                                $(td).html("<span class='badge badge-success'>aprobado</span>")
                            } else if (rowData[8] == 'pendiente') {
                                $(td).html("<span class='badge badge-warning'>pendiente</span>")
                            } else if (rowData[8] == 'anulado') {
                                $(td).html("<span class='badge badge-danger'>anulado</span>")
                            } else {
                                $(td).html("<span class='badge badge-info'>finalizado</span>")

                            }

                        }
                    },
                 
              ],
              "footerCallback": function(row, data, start, end, display) {
                                var api = this.api(),
                                    data;
                                var intval = function(i) {
                                    return typeof i === 'string' ?
                                        i.replace(/[\$,]/g, '') * 1 :
                                        typeof i === 'number' ?
                                        i : 0;
                                };
                                total = api
                                    .column(5)
                                    .data()
                                    .reduce(function(a, b) {
                                        return intval(a) + intval(b);
                                    }, 0);
                                pageTotal = api
                                    .column(5, {
                                        page: 'current'
                                    })
                                    .data()
                                    .reduce(function(a, b) {
                                        return intval(a) + intval(b);
                                    }, 0);
                                $(api.column(5).footer()).html(
                                    '' + pageTotal 
                                    //   '' + pageTotal + ' ( ' + total + ' total)'
                                );


                },
              "order": [
                  [0, 'desc']
              ],
              lengthMenu: [0, 5, 10, 15, 20, 50],
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

    function validar() {

        var fecha_ini = document.getElementById('text_fecha_I').value;
        var fecha_fin = document.getElementById('text_fecha_F').value;
        var usuario = document.getElementById('select_usuarios').value;
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
        if (usuario == 0) {
            Toast.fire({
                icon: 'error',
                title: ' Seleccione un usuario'
            })
            $("#select_usuarios").focus();
            return false;
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