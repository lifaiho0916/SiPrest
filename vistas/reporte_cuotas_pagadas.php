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



  <!-- Main content -->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info card-outline shadow ">
                      <div class="card-header">
                          <h3 class="card-title">Reporte Cuotas Pagadas</h3>

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
                              <table id="tbl_report_cuotas_P" class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Id client</th>
                                          <th>Cliente</th>
                                          <th>Nro Prestamo</th>
                                          <th>Nro Cuota</th>
                                          <th>Monto</th>
                                          <th>Fecha</th>
                                          <th>moneda id</th>
                                          <th>Moneda</th>

                                         <th class="text-cetner">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody class="small text left">
                                  </tbody>
                                  <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total:</th>
                                            <th></th>
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
      var tbl_report_cuotas_P, cliente_id;

      var Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 3000
      });
      $(document).ready(function() {
        $('.js-example-basic-single').select2();
        fechas();
        ReporteCuotasPagadas();
       


         /* ======================================================================================
          IMPRIMIR TICKET DE CUOTA PAGADA
          =========================================================================================*/
          $('#tbl_report_cuotas_P').on('click', '.btnImprimirRecibo', function() { //class foto tiene que ir en el boton

            if (tbl_report_cuotas_P.row(this).child.isShown()) {
                var data = tbl_report_cuotas_P.row(this).data();
            } else {
                var data = tbl_report_cuotas_P.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
                //console.log(data);
            }

            window.open("MPDF/ticket_pago_cuota.php?codigo=" + data[2] + "&cuota=" + data[3] + "#zoom=100", "Recibo de Pago ", "scrollbards=NO");

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
                          options += "<option value='" + respuesta[i][0] + "'>" + respuesta[i][1] + "</option>";
                      }
                      document.getElementById('select_usuarios').innerHTML = options;
                  } else {
                      options += "<option value=''>No se encontraron datos</option>";
                     // document.getElementById('select_usuario').innerHTML = options;
                  }

              }
          });
        

           /*===================================================================*/
          //AL HACER CLIP EN EL BOTON BUSCAR
          /*===================================================================*/
      $("#btnFiltrar").on('click', function() {
               ReporteCuotasPagadas()
            validar();

        })


      }) // FIN DOCUMENT


      function ReporteCuotasPagadas() {
        fecha_ini = $("#text_fecha_I").val(); //capturamos el valor
        fecha_fin = $("#text_fecha_F").val();
        var id_usu = $("#select_usuarios").val();

          tbl_report_cuotas_P = $("#tbl_report_cuotas_P").DataTable({
              responsive: true,
              destroy: true,
              async: false,
            processing: true,

              dom: 'Bfrtip',
              buttons: [{
                      "extend": 'excelHtml5',
                      "title": 'Reporte de Cuotas Pagadas',
                      "exportOptions": {
                          'columns': [1, 2, 3, 4,5,7]
                      },
                      "text": '<i class="fa fa-file-excel"></i>',
                      "titleAttr": 'Exportar a Excel'
                  },
                  {
                      "extend": 'print',
                      "text": '<i class="fa fa-print"></i> ',
                      "titleAttr": 'Imprimir',
                      "exportOptions": {
                          'columns': [1, 2, 3, 4,5,7]   
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
                      'accion': 2,
                      'fecha_ini': fecha_ini,
                      'fecha_fin': fecha_fin,
                      'id_usuario': id_usu
                  }, //LISTAR 
              },
              columnDefs: [{
                      targets: 0,
                      visible: false

                  },
                  {
                      targets: 6,
                      visible: false

                  },
                  {
                      targets: 8, //columna 2
                      sortable: false, //no ordene
                      render: function(data, type, full, meta) {
                          return "<center>" +
                              "<span class='btnImprimirRecibo  text-primary px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Imprimir Ticket '> " +
                              "<i class='fas fa-file-invoice-dollarfas fa-file-invoice-dollar fs-6'></i> " +
                              "</span> " +
                            //   "<span class='btnEliminarMoneda  text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar Moneda '> " +
                            //   "<i class='fas fa-trash fs-6'> </i> " +
                            //   "</span>" +
                              "</center>"
                      }
                    }
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
                                    .column(4)
                                    .data()
                                    .reduce(function(a, b) {
                                        return intval(a) + intval(b);
                                    }, 0);
                                pageTotal = api
                                    .column(4, {
                                        page: 'current'
                                    })
                                    .data()
                                    .reduce(function(a, b) {
                                        return intval(a) + intval(b);
                                    }, 0);
                                $(api.column(4).footer()).html(
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