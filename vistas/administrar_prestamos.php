  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h4 class="m-0">Administrar Prestamos</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                      <li class="breadcrumb-item active">Administrar Prestamos</li>
                  </ol>
              </div><!-- /.col -->
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
                          <h3 class="card-title">Listado de Prestamos por usuario</h3>

                      </div>
                      <div class=" card-body">
                          <input type="text" id="id_usuario" hidden>
                          <div class="table-responsive">
                              <table id="tbl_ls_prestamos"
                                  class="table display table-hover text-nowrap compact  w-100  rounded">
                                  <thead class="bg-info text-left">
                                      <tr>
                                          <th>Id</th>
                                          <th>Nro Prestamo</th>
                                          <th>cliente id</th>
                                          <th>Cliente</th>
                                          <th>Monto</th>
                                          <th>Interes</th>
                                          <th>Cuotas</th>
                                          <th>fpago id</th>
                                          <th>F. Pago</th>
                                          <th>usuario id</th>
                                          <th>Usuario</th>
                                          <th>Fecha</th>
                                          <th>Estado</th>
                                          <th class="text-cetner">Opciones</th>
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

  <!-- MODAL DETALLE PRESTAMO-->
  <div class="modal fade" id="modal_detalle_prestamo" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header bg-gray py-1 align-items-center">
                  <h5 class="modal-title" id="titulo_modal_cliente">Detalle de cuotas a Pagar</h5>
                  <button type="button" class="close  text-white border-0 fs-5" id="btncerrarmodal_detalle"
                      data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- <form class="needs-validation" novalidate> -->
                  <div class="row" id="cabecera_prest" >
                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <input type="text" id="" hidden>
                                  <span class="small"> Nro Prestamo</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_nro_prestamo_d"
                                  placeholder="Nro_prestamo" disabled>

                          </div>
                      </div>
                      <div class="col-lg-8">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Cliente</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_cliente_d"
                                  placeholder="Documento" disabled>

                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Monto Pres.</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_monto_d"
                                  placeholder="Documento" disabled>


                          </div>
                      </div>

                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Interes</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_interes_d" name=""
                                  placeholder="Descripcion" disabled>


                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Cuota</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_cuota_d" name=""
                                  placeholder="Descripcion" disabled>

                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Forma de Pago</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_fpago__d" name=""
                                  placeholder="Descripcion" disabled>

                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Fecha Emision</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_fecha__d" name=""
                                  placeholder="Descripcion" disabled>


                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Monto Cuota</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_monto_cuota__d" name=""
                                  placeholder="Descripcion" disabled>


                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Monto Interes</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_monto_interes__d"
                                  name="" placeholder="Descripcion" disabled>


                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Monto Total</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_monto_total__d" name=""
                                  placeholder="Descripcion" disabled>


                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Cuotas Pagadas</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_cuotas_pagadas__d"
                                  name="" placeholder="" disabled>



                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Monto Pagado</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_monto_pagado"
                                  placeholder="" disabled>



                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <span class="small"> Mora</span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_mora"
                                  placeholder="" disabled>



                          </div>
                      </div>
                      <div class="col-md-2" hidden>
                          <label form="">&nbsp;</label><br>
                          <button type="button" class="btn btn-danger btn-sm" id="btnLiquidar">Liquidar</button>
                          <!-- <button class="btn btn-info btn-sm" ><i class="fas fa-search"></i>Liquidar</button> -->
                      </div>

                      <!-- <div class="col-md-2">
                          <div class="form-group mb-2">
                              <label for="" class="">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </label>
                              <button type="button" class="btn btn-primary btn-sm" id="btnregistrar_cliente">Registrar</button>


                          </div>
                      </div> -->
                  </div>
                  <br>
                  <div class="row">
                      <div class="table-responsive">
                          <table id="tbl_detalle_prestamo"
                              class="table display table-hover text-nowrap compact  w-100  rounded">
                              <thead class="bg-info text-left">
                                  <tr>
                                      <th>Id</th>
                                      <th>Nro prestamo</th>
                                      <th>Usuario</th>
                                      <th>Cuota</th>
                                      <th>Fecha</th>
                                      <th>Monto</th>
                                      <th>Estado</th>
                                      <th class="text-cetner">Opciones</th>
                                  </tr>
                              </thead>
                              <tbody class="small text left">
                              </tbody>
                          </table>

                      </div>


                  </div>
                  <!-- </form> -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                      id="btncerrar_detallee">Cerrar</button>
                  <!-- <button type="button" class="btn btn-primary btn-sm" id="btnregistrar_cliente">Registrar</button> -->
              </div>
          </div>
      </div>
  </div>
  <!-- fin Modal -->

  <!-- MODAL PAGAR MANUAL-->
  <div class="modal fade" id="modal_pagar_manual" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-header bg-gray py-1 align-items-center">
                  <!-- <h5 class="modal-title" id="titulo_modal_cliente">Detalle de cuotas a Pagar</h5> -->
                  <button type="button" class="close  text-white border-0 fs-5" id="btncerrarmodal_monto_c_m"
                      data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- <form class="needs-validation" novalidate> -->
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <input type="text" id="" hidden>
                                  <span class="small"> Monto de Cuota</span>
                              </label>
                              <input type="number" class=" form-control form-control-sm" id="text_monto_cuota_m"
                                  onkeydown="sinSimbolo(event)">
                              <!-- onkeypress="NumerosEnter(event)" -->

                              <input type="number" class=" form-control form-control-sm" id="text_nro_p" hidden>

                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <input type="text" id="" hidden>
                                  <span class="small">Nro. Cuota</span>
                              </label>

                              <input type="number" class=" form-control form-control-sm" id="text_nro_c">


                          </div>
                      </div>


                  </div>

                  <!-- </form> -->
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-primary btn-sm" id="btnregistrar_monto_cuota_m">Guardar</button> -->
                  <a class="btn btn-primary btn-sm" id="btnregistrar_monto_cuota_m">Guardar</a>
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                      id="btncerrar_monto_cuota_m">Cerrar</button>

              </div>
          </div>
      </div>
  </div>
  <!-- fin Modal -->

  <!-- REGISTRAR GARANTIAS -->
  <div class="modal fade" id="mdlGarantia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRAL IMAGENES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <a href="https://idsoftwareonline.com/siprest3//vistas/codigo3.php" target="_blank"><b>Haz clic para registrar imagenes</b></a>
      </div>
    </div>
  </div>
</div>


  <!-- MODAL PAGAR MORA-->
  <div class="modal fade" id="modal_dias_mora" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-header bg-gray py-1 align-items-center">
                  <h5 class="modal-title" id="titulo_modal_cliente">Moras</h5>
                  <button type="button" class="close  text-white border-0 fs-5" id="btncerrarmodal_dias_mora" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- <form class="needs-validation" novalidate> -->
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">
                                  <input type="text" id="" hidden>
                                  <span class="small"> Dias Mora </span>
                              </label>
                              <input type="text" class=" form-control form-control-sm" id="text_dias_mora" name="text_dias_mora">
                              <!-- onkeypress="NumerosEnter(event)" -->

                              <input type="hidden" class=" form-control form-control-sm" id="text_nro_pr_mo" placeholder="nro prestamo">
                              <input type="hidden" class=" form-control form-control-sm" id="text_nro_cuo_mor" placeholder="nro cuota">

                          </div>
                      </div>





                  </div>

                  <div class="row">

                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">

                                  <span class="small">Monto Cuota</span>
                              </label>

                              <input type="number" class=" form-control form-control-sm" id="text_monto_m">


                          </div>
                      </div>

                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">

                                  <span class="small">Monto mora * dias</span>
                              </label>

                              <input type="text" class=" form-control form-control-sm" id="text_monto_por_dia">


                          </div>
                      </div>

                      <div class="col-lg-4">
                          <div class="form-group mb-2">
                              <label for="" class="">

                                  <span class="small">Total Cuota</span>
                              </label>

                              <input type="text" class=" form-control form-control-sm" id="text_total_cuota_m">


                          </div>
                      </div>

                  </div>

                  <!-- </form> -->
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-primary btn-sm" id="btnregistrar_monto_cuota_m">Guardar</button> -->
                  <a class="btn btn-primary btn-sm" id="btnregistrar_cal_mora">Procesar</a>
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" id="btncerrar_moram">Cerrar</button>

              </div>
          </div>
      </div>
  </div>
  <!-- fin Modal -->




  <script>
var accion;
var tbl_ls_prestamos, tbl_detalle_prestamo;

var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});


$(document).ready(function() {

    var id_usuario = $("#text_Idprincipal").val();
    var nom_user= $("#text_nomb_user").val();

    //  $("#id_usuario").val(id);


    // var id_usuario =  $("#id_usuario").val();

    /***************************************************************************
     * INICIAR DATATABLE CLIENTES
     ******************************************************************************/
    var tbl_ls_prestamos = $("#tbl_ls_prestamos").DataTable({
        responsive: true,


        dom: 'Bfrtip',
        buttons: [{
                "extend": 'excelHtml5',
                "title": 'Reporte Prestamos por usuario',
                "exportOptions": {
                    'columns': [1, 3, 4.5, 6, 8, 10, 11, 12]
                },
                "text": '<i class="fa fa-file-excel"></i>',
                "titleAttr": 'Exportar a Excel'
            },
            {
                "extend": 'print',
                "text": '<i class="fa fa-print"></i> ',
                "titleAttr": 'Imprimir',
                "exportOptions": {
                    'columns': [1, 3, 4.5, 6, 8, 10, 11, 12]
                },
                "download": 'open'
            },
            'pageLength',
        ],
        ajax: {
            url: "ajax/admin_prestamos_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 1
               // 'id_usuario': id_usuario
            }, //LISTAR 
        },
        columnDefs: [{
                targets: 0,
                visible: false

            }, {
                targets: 2,
                visible: false

            }, {
                targets: 7,
                visible: false

            },
            {
                targets: 9,
                visible: false

            }, {
                targets: 12,
                //sortable: false,
                createdCell: function(td, cellData, rowData, row, col) {

                    if (rowData[12] == 'aprobado') {
                        $(td).html("<span class='badge badge-success'>aprobado</span>")
                    } else if (rowData[12] == 'pendiente') {
                        $(td).html("<span class='badge badge-warning'>pendiente</span>")
                    } else if (rowData[12] == 'anulado') {
                        $(td).html("<span class='badge badge-danger'>anulado</span>")
                    } else {
                        $(td).html("<span class='badge badge-info'>finalizado</span>")

                    }

                }
            }, {
                targets: 13, //columna 2
                sortable: false, //no ordene
                render: function(td, cellData, rowData, row, col) {

                    if (rowData[12] == 'aprobado' || rowData[12] == 'finalizado') {
                        return "<center>" +
                            "<span class='btnPagar text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Pagar Cuota'> " +
                            "<i class='fas fa-hand-holding-usd fs-6'></i> " +
                            "</span> " +
                            "<span class='btnCronogramaPagos text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Cronograma de Pagos'> " +
                            "<i class='fas fa-file-invoice-dollarfas fa-file-invoice-dollar fs-6'> </i> " +
                            "</span>" +
                            "<span class='btnContrato text-primary px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Ver Contrato'> " +
                            "<i class='fas fa-book fs-6'> </i> " +
                            "</span>" +
                            "<span class='EnviarCorreo text-info px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Enviar cronograma de cuotas por Correo'> " +
                            "<i class='fas fa-envelope fs-6'> </i> " +
                            "</span>" +
                            "<span class='btnEnviarGarantia text-secundary px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Agregar Garantia'> " +
                            "<i class='fas fa-image fs-6'> </i> " +
                            "</span>" +
                            "</center>"
                    } else { //pendiente
                        return "<center>" +
                            "<span class=' text-secondary px-1'  data-bs-toggle='tooltip' data-bs-placement='top'> " +
                            "<i class='fas fa-hand-holding-usd fs-6'></i> " +
                            "</span> " +
                            "<span class=' text-secondary px-1'data-bs-toggle='tooltip' data-bs-placement='top' > " +
                            "<i class='fas fa-file-invoice-dollar fs-6'> </i> " +
                            "</span>" +
                            "<span class=' text-secondary px-1'  data-bs-toggle='tooltip' data-bs-placement='top' > " +
                            "<i class='fas fa-book fs-6'> </i> " +
                            "</span>" +
                            "<span class=' text-secondary px-1' data-bs-toggle='tooltip' data-bs-placement='top' > " +
                            "<i class='fas fa-envelope fs-6'> </i> " +
                            "</span>" +
                            "<span class=' text-secundary px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Agregar Garantia'> " +
                            "<i class='fas fa-image fs-6'> </i> " +
                            "</span>" +
                            "</center>"

                    }
                }
            }
        ],
        "order": [
            [0, 'desc']
        ],
        lengthMenu: [0, 5, 10, 15, 20, 50],
        "pageLength": 10,
        "language": idioma_espanol,
        select: true
    });


    /* ======================================================================================
      VER DETALLE DE PAGOS  -
    =========================================================================================*/
    $("#tbl_ls_prestamos tbody").on('click', '.btnPagar', function() {
        var perfil_u = $("#text_perfil").val();
        console.log(perfil_u);

        if (tbl_ls_prestamos.row(this).child.isShown()) {
            var data = tbl_ls_prestamos.row(this).data();
        } else {
            var data = tbl_ls_prestamos.row($(this).parents('tr'))
        .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
            //   console.log(data);
        }

        if (perfil_u == 1) {

            $("#cabecera_prest").attr('hidden', false); // habilitar


        }else {
            $("#cabecera_prest").attr('hidden', true); // ocultar
        }



        $("#modal_detalle_prestamo").modal({
            backdrop: 'static',
            keyboard: false
        });
        $("#modal_detalle_prestamo").modal('show'); //abrimos el modal*/

        $("#text_nro_prestamo_d").val(data[1]);
        $("#text_cliente_d").val(data[3]);
        $("#text_monto_d").val(data[4] + ".00");
        $("#text_interes_d").val(data[5] + " %");
        $("#text_cuota_d").val(data[6]);
        $("#text_fpago__d").val(data[8]);
        $("#text_fecha__d").val(data[11]);
        $("#text_monto_cuota__d").val(data[14]);
        $("#text_monto_interes__d").val(data[15]);
        $("#text_monto_total__d").val(data[16]);
        $("#text_cuotas_pagadas__d").val(data[17]);
        $("#text_mora").val(data[20]);


        Traer_Detalle(data[1]);

        CargarCantCuotasPagadas();
    })

         /* ======================================================================================
     CALCULOS DE MORA  AL HACER CLICK
    =========================================================================================*/
    $("#tbl_detalle_prestamo tbody").on('click', '.btndiasMora', function() {
              var monto_mora_pre = $('#text_mora').val();

              if (tbl_detalle_prestamo.row(this).child.isShown()) {
                  var data = tbl_detalle_prestamo.row(this).data();
              } else {
                  var data = tbl_detalle_prestamo.row($(this).parents('tr')).data();
                  //console.log(data);
              }
              const nro_p = data[1];
              const nro_c = data[3];
              const mont_cuo_m = data[5];

              $("#modal_dias_mora").modal({
                  backdrop: 'static',
                  keyboard: false
              });
              $("#modal_dias_mora").modal('show'); //abrimos el modal*/

              //datos dias mora
              monto_mora(nro_p, nro_c);

              const dias_m = $('#text_dias_mora').val();
              const total_d_mora = (dias_m * parseFloat(monto_mora_pre));
              const total_cuo_mor = (parseFloat(mont_cuo_m) + total_d_mora);

              $("#text_monto_m").val(mont_cuo_m);
              $("#text_monto_por_dia").val(total_d_mora);
              $("#text_total_cuota_m").val(total_cuo_mor);
              $("#text_nro_pr_mo").val(nro_p);
              $("#text_nro_cuo_mor").val(nro_c);
          })


                /* ======================================================================================
      LIQUIDAR TOTALMENTE EL PRESTAMO AL HACER CLICK
    =========================================================================================*/
    $("#btnregistrar_cal_mora").on('click', function() {
              //var count = 0;
              var n_prest_m = $("#text_nro_pr_mo").val();
              var n_cout_m = $("#text_nro_cuo_mor").val();
              var n_dias_mo = $("#text_dias_mora").val();
              var mont_dias_mo = $("#text_monto_por_dia").val();
              var t_mont_cuot_mor = $("#text_total_cuota_m").val();

              if (parseFloat(t_mont_cuot_mor) < 0) {

                  Toast.fire({
                      icon: 'error',
                      title: 'EL monto de la cuota debe ser mayor que 0 '

                  });
                  $('#text_total_cuota_m').focus();
              } else {

                  Swal.fire({
                      title: 'Esta seguro que desea procesar la mora?',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Si, Procesar',
                      cancelButtonText: 'Cancelar',
                  }).then((result) => {

                      if (result.isConfirmed) {


                          tbl_detalle_prestamo.rows().eq(0).each(function(index) {

                              var row = tbl_detalle_prestamo.row(index);
                              var data = row.data();
                              var monto_actu = data['monto'];
                              //console.log(monto_actu);

                              if (data['cuota'] == n_cout_m) {

                                $.ajax({
                              url: "ajax/admin_prestamos_ajax.php",
                              method: "POST",
                              data: {
                                   'accion': 10,
                                   'nro_prestamo': n_prest_m,
                                   'pdetalle_nro_cuota': n_cout_m,
                                   'pdetalle_monto_cuota': t_mont_cuot_mor,
                                   'pdetalle_dias_mora': n_dias_mo,
                                   'pdetalle_mora': mont_dias_mo,
                              },
                              async: true,
                              //   cache: false,
                              //   contentType: false,
                              //   processData: false,
                              dataType: 'json',
                              success: function(respuesta) {

                                  // console.log(respuesta);


                                  if (respuesta == "ok") {

                                      Toast.fire({
                                          icon: 'success',
                                          title: 'Proceso de mora Finalizado '
                                          // title: titulo_msj
                                      });
                                      //cambiamos el monto + mora en la datatable
                                      tbl_detalle_prestamo.cell(index, 5).data(parseFloat(t_mont_cuot_mor).toFixed(2)).draw();

                                      //CargarCantCuotasPagadas();
                                      $("#modal_dias_mora").modal('hide');
                                      tbl_detalle_prestamo.ajax.reload(); //recargamos el datatable
                                      //tbl_ls_prestamos.ajax.reload();

                                  } else {
                                      Toast.fire({
                                          icon: 'error',
                                          title: 'Error al procesar mora'
                                      });
                                  }



                              }
                          });

                                 
                              }

                          });
                         


                      }


                  })

              }

          })


    /* ======================================================================================
          PAGAR UNA CUOTA DEL PRESTAMO
      =========================================================================================*/
    $("#tbl_detalle_prestamo tbody").on('click', '.btnPagarCuta', function() {

        // accion = 3; //seteamos la accion para Eliminar
        var monto_t_prestamo = $('#text_monto_total__d').val();
        var monto_pagado = $('#text_monto_pagado').val();

        if (tbl_detalle_prestamo.row(this).child.isShown()) {
            var data = tbl_detalle_prestamo.row(this).data();
        } else {
            var data = tbl_detalle_prestamo.row($(this).parents('tr'))
        .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
             // console.log("🚀 ~ file: productos.php ~ line 751 ~ $ ~ data", data);
        }

        var nro_prestamo = data[1];
        var pdetalle_nro_cuota = data[3];
        var estado = data[6];
        var monto_c = data[5];

        if (parseFloat(monto_pagado) == parseFloat(monto_t_prestamo)) {


            Swal.fire({
                title: 'El Prestamo ya llego a su Totalidad, Desea Finalizar el Prestamo?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Finalizar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", 7);
                    datos.append("nro_prestamo", nro_prestamo);

                    $.ajax({
                        /*  async: false,
                        url: "ajax/admin_prestamos_ajax.php",
                        method: "POST",
                        data: {
                            'accion': 6,
                            'nro_prestamo': nro_prestamo,
                            'pdetalle_nro_cuota': cuota_i,
                            'pdetalle_monto_cuota': total
                        },
                        dataType: 'json',
                        success: function(respuesta) {*/


                        url: "ajax/admin_prestamos_ajax.php",
                        method: "POST",
                        data: datos, //enviamos lo de la variable datos
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {

                            if (respuesta == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Prestamo Finalizado '
                                    // title: titulo_msj
                                });
                                CargarCantCuotasPagadas();
                                Notificaciones();

                                tbl_detalle_prestamo.ajax
                            .reload(); //recargamos el datatable
                                tbl_ls_prestamos.ajax.reload();

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Error al Finalizar el Prestamo'
                                });
                            }

                        }
                    });

                }
            })

        } else {


            $("#modal_pagar_manual").modal({
                backdrop: 'static',
                keyboard: false
            });
            $("#modal_pagar_manual").modal('show'); //abrimos el modal*/

            $('#text_monto_cuota_m').val(monto_c);
            $('#text_nro_c').val(pdetalle_nro_cuota);
            $('#text_nro_p').val(nro_prestamo);
        }





    })

    /* ======================================================================================
         REGISTRAR IMAGEN - GARANTIA
      =========================================================================================*/
    $("#tbl_ls_prestamos tbody").on('click', '.btnEnviarGarantia', function() {
    $("#mdlGarantia").modal({
        backdrop: 'static',
        keyboard: false
    });
    $("#mdlGarantia").modal('show'); //abrimos el modal*/

    if (tbl_ls_prestamos.row(this).child.isShown()) {
        var data = tbl_ls_prestamos.row(this).data();
    } else {
        var data = tbl_ls_prestamos.row($(this).parents('tr'))
            .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
        console.log(data);
    }

    var nro_prestamo = data[1];
    var des_i = data["nombre_img"];

    $('#text_nrop_garantia').val(nro_prestamo);
    $('#text_desc_garantia').val(des_i);

    // Obtener la lista de archivos seleccionados
    var files = $("#text_imagen_m").prop('files');

    // Si se seleccionaron archivos, recorrer la lista y realizar operaciones con cada uno
    if (files.length > 0) {
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var filename = file.name;

            // Aquí puedes realizar las operaciones necesarias con cada archivo,
            // por ejemplo, subirlo a un servidor o mostrar una vista previa
            // utilizando la URL.createObjectURL().

            // Ejemplo de cómo mostrar una vista previa
            var reader = new FileReader();
            reader.onload = function(event) {
                var url = event.target.result;
                var img = $('<img>').attr('src', url);
                $('#preview').append(img);
            }
            reader.readAsDataURL(file);
        }
    }
})



    /* ======================================================================================
        ACTUALIZAR IMAGEN DEL PRODUCTO AL HACER CLICK EN BOTON GUARDAR
        =========================================================================================*/
    $("#btnReg_garantia").on('click', function() {
        accion = 8; //PARA GUARDA LA IMAGEN

        var nro_prest = $("#text_nrop_garantia").val();
        var descrip = $("#text_desc_garantia").val();
        // console.log(cod_pro);
        const inputImage = document.querySelector('#text_imagen_m');

        Swal.fire({
            title: 'Registrar la foto de la garantia del prestamo?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Registrar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {

            if (result.isConfirmed) {

                var datos = new FormData();

                datos.append("accion", accion);
                datos.append("nro_prestamo", nro_prest);
                datos.append("nombre_img", descrip);
                datos.append('archivo[]', inputImage.files[0]);


                $.ajax({
                    url: "ajax/admin_prestamos_ajax.php",
                    method: "POST",
                    data: datos, //enviamos lo de la variable datos
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(respuesta) {
                        // console.log(respuesta);

                        if (respuesta == "ok") {

                            Toast.fire({
                                icon: 'success',
                                title: 'Foto Gugardada '
                                // title: titulo_msj
                            });

                            $("#mdlGarantia").modal('hide');
                            tbl_ls_prestamos.ajax
                        .reload(); //recargamos el datatable
                            $("#text_imagen_m").val("");


                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'No se puede registrar'
                            });
                        }

                    }
                });

            }
        })


    })


    /* ======================================================================================
         PAGAR UNA CUOTA DEL PRESTAMO DE FORMA MANUAL
     =========================================================================================*/
    $("#btnregistrar_monto_cuota_m").on('click', function() {
        accion = 3; //seteamos la accion para 
        var nr_c = $('#text_nro_c').val();
        var monto_nuevo = $('#text_monto_cuota_m').val();
        var nro_pre = $('#text_nro_p').val();
        var monto_t_prestamo = $('#text_monto_total__d').val();
        var monto_pagado = $('#text_monto_pagado').val();
        

        var valid_su = (parseFloat(monto_nuevo) + parseFloat(monto_pagado)).toFixed(2);
        var faltante = (parseFloat(monto_t_prestamo) - parseFloat(monto_pagado)).toFixed(2);
        // console.log(monto_pagado);
        //console.log(monto_t_prestamo);


        if (parseFloat(monto_nuevo) > parseFloat(monto_t_prestamo)) {
            Toast.fire({
                icon: 'error',
                title: 'El monto a pagar no debe pasar del monto que se le a prestado, su prestamo es de " ' +
                    monto_t_prestamo + ' " '

            });
            $('#text_monto_cuota_m').focus();
            // return false;


        } else if (parseFloat(valid_su) > parseFloat(monto_t_prestamo)) {

            Toast.fire({
                icon: 'error',
                title: 'Supera el monto que se le a prestado, falta " ' + faltante + ' " '

            });
            $('#text_monto_cuota_m').focus();
            //return false;

        } else if (parseFloat(monto_pagado) == parseFloat(monto_t_prestamo)) {

            Toast.fire({
                icon: 'error',
                title: 'Ya no hay Cuotas por pagar del prestamo, porque ya llego a su Totalidad, revisar '

            });
            $('#text_monto_cuota_m').focus();
            //return false;

        } else if (parseFloat(monto_nuevo) < 0) {

            Toast.fire({
                icon: 'error',
                title: 'EL monto de la cuota debe ser mayor que 0 '

            });
            $('#text_monto_cuota_m').focus();
        } else {


            Swal.fire({
                title: 'Desea Pagar cuota Nro "' + nr_c + '" con el monto nuevo de "' +
                    monto_nuevo + '" ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Pagar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", accion);
                    datos.append("nro_prestamo", nro_pre);
                    datos.append("pdetalle_nro_cuota", nr_c);
                    datos.append("pdetalle_monto_cuota", monto_nuevo);
                    datos.append("id_usuario", id_usuario);
                    datos.append("nombre_user", nom_user);



                    $.ajax({
                        url: "ajax/admin_prestamos_ajax.php",
                        method: "POST",
                        data: datos, //enviamos lo de la variable datos
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {

                            if (respuesta == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Cuota Pagada '
                                    // title: titulo_msj
                                });
                                CargarCantCuotasPagadas();
                                Notificaciones();
                                recalcularMontos(nr_c, monto_nuevo, nro_pre,
                                    monto_t_prestamo, monto_pagado);

                                $("#modal_pagar_manual").modal('hide');
                                // $("#modal_pagar_manual").modal('hide');

                                tbl_detalle_prestamo.ajax
                            .reload(); //recargamos el datatable
                                tbl_ls_prestamos.ajax.reload();

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Error al Pagar cuota'
                                });
                            }

                        }
                    });

                }
            })

        }

    })

    /* ======================================================================================
    EVENTO QUE LIMPIA EL INPUT  AL CERRAR LA VENTANA MODAL
    =========================================================================================*/
    $("#btncerrar_detallee, #btncerrarmodal_detalle").on('click', function() {
        $("#text_descripcion").val("");
        $("#text_nro_prestamo_d").val("");
        $("#text_cliente_d").val("");
        $("#text_monto_d").val("");
        $("#text_interes_d").val("");
        $("#text_cuota_d").val("");
        $("#text_fpago__d").val("");
        $("#text_fecha__d").val("");

        tbl_detalle_prestamo.destroy();
        // $('#tbl_detalle_prestamo').empty(); 


    })


    /* ======================================================================================
    IMPRIMIR TICKET DE CUOTA PAGADA
    =========================================================================================*/
    $('#tbl_detalle_prestamo').on('click', '.btnImprimirRecibo',function() { //class foto tiene que ir en el boton

        if (tbl_detalle_prestamo.row(this).child.isShown()) {
            var data = tbl_detalle_prestamo.row(this).data();
        } else {
            var data = tbl_detalle_prestamo.row($(this).parents('tr'))
        .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
        }

        window.open("MPDF/ticket_pago_cuota.php?codigo=" + data[1] + "&cuota=" + data[3] + "#zoom=100","Recibo de Pago ", "scrollbards=NO");

    });

    /* ======================================================================================
    IMPRIMIR TICKET DE CRONOGRAMA DE PAGOS
    =========================================================================================*/
    $('#tbl_ls_prestamos').on('click', '.btnCronogramaPagos', function() { //class foto tiene que ir en el boton

        if (tbl_ls_prestamos.row(this).child.isShown()) {
            var data = tbl_ls_prestamos.row(this).data();
        } else {
            var data = tbl_ls_prestamos.row($(this).parents('tr'))
        .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
        }

        window.open("MPDF/historial_prestamo.php?codigo=" + data[1] + "#zoom=100",
            "Cronograma de Pagos ", "scrollbards=NO");

    });


    /********************************************************************
    		ENVIAR CRONOGRAMA DE PAGOS POR CORREO
    ********************************************************************/
    $('#tbl_ls_prestamos').on('click', '.EnviarCorreo', function() { //class foto tiene que ir en el boton
        var data = tbl_ls_prestamos.row($(this).parents('tr')).data(); //tama単o de escritorio
        if (tbl_ls_prestamos.row(this).child.isShown()) {
            var data = tbl_ls_prestamos.row(this).data(); //para celular y usas el responsive datatable

        }

        Swal.fire({
            title: 'Esta seguro de Enviar el cronograma de cuotas por correo?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                window.open("MPDF/historial_prestamo_Email.php?codigo=" + data[1] + "#zoom=100",
                    "Cronograma de Pagos ", "scrollbards=NO");
                Toast.fire({
                    icon: 'success',
                    title: 'Correo enviado correctamente'
                });


            }

        })

    });

    /* ======================================================================================
    IMPRIMIR CONTRATO
    =========================================================================================*/
    $('#tbl_ls_prestamos').on('click', '.btnContrato', function() { //class foto tiene que ir en el boton

        if (tbl_ls_prestamos.row(this).child.isShown()) {
            var data = tbl_ls_prestamos.row(this).data();
        } else {
            var data = tbl_ls_prestamos.row($(this).parents('tr'))
        .data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
        }

        window.open("MPDF/contrato2.php?codigo=" + data[1] + "#zoom=100", "Contrato", "scrollbards=NO");

    });

    /********************************************************************
    		ENVIAR RECIBO DE CUOTA PAGADA POR CORREO
    ********************************************************************/
    $('#tbl_detalle_prestamo').on('click', '.EnviarCorreoCuotaP', function() { //class foto tiene que ir en el boton
        var data = tbl_detalle_prestamo.row($(this).parents('tr')).data(); //tama単o de escritorio
        if (tbl_detalle_prestamo.row(this).child.isShown()) {
            var data = tbl_detalle_prestamo.row(this)
        .data(); //para celular y usas el responsive datatable

        }

        Swal.fire({
            title: 'Esta seguro de Enviar el Recibo por correo?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                window.open("MPDF/ticket_pago_cuota_Email.php?codigo=" + data[1] + "&cuota=" +
                    data[2] + "#zoom=100", "Recibo de Pago ", "scrollbards=NO");
                Toast.fire({
                    icon: 'success',
                    title: 'Correo enviado correctamente'
                });


            }

        })

    });


    /* ======================================================================================
      LIQUIDAR TOTALMENTE EL PRESTAMO AL HACER CLICK
    =========================================================================================*/
    $("#btnLiquidar").on('click', function() {
        var count = 0;
        var nro_prestamo = $("#text_nro_prestamo_d").val();

        var arreglo_cuota = new Array();
        //  var estado_cuota = new Array();

        $("#tbl_detalle_prestamo tbody tr").each(function(i, e) {
            arreglo_cuota.push($(this).find('td').eq(1).text());
            //estado_cuota.push($(this).find('td').eq(4).text());
            count++;
        })

        var pdetalle_nro_cuota = arreglo_cuota.toString();
        //var pdetalle_estado_cuota = estado_cuota.toString();
        // console.log(pdetalle_nro_cuota );


        Swal.fire({
            title: 'Esta seguro que desea liquidar totalmente el prestamo"' + nro_prestamo +
                '" ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Liquidar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url: "ajax/admin_prestamos_ajax.php",
                    method: "POST",
                    data: {
                        accion: 5,
                        nro_prestamo: nro_prestamo,
                        pdetalle_nro_cuota: pdetalle_nro_cuota
                    },
                    async: true,
                    //   cache: false,
                    //   contentType: false,
                    //   processData: false,
                    dataType: 'json',
                    success: function(respuesta) {

                        // console.log(respuesta);


                        if (respuesta == "ok") {

                            Toast.fire({
                                icon: 'success',
                                title: 'Prestamo Liquidado Correctamente '
                                // title: titulo_msj
                            });
                            CargarCantCuotasPagadas();

                            tbl_detalle_prestamo.ajax
                        .reload(); //recargamos el datatable
                            tbl_ls_prestamos.ajax.reload();

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Error al Liquidar Prestamo'
                            });
                        }



                    }
                });


            }


        })
    })


}) // FIN DOCUMENT READY


/* ======================================================================================
    FUNCION PARA PAGAR CUOTAS MANUALES Y HACER CALCULOS 
  =========================================================================================*/
function recalcularMontos(cuota, monto, nro_prestamo, monto_t_prestamo) {

    tbl_detalle_prestamo.rows().eq(0).each(function(index) {

        var row = tbl_detalle_prestamo.row(index);
        var data = row.data();
        var monto_tabla = data['monto'];
        var cuota_i = parseInt(cuota) + 1;


        if (data['cuota'] == cuota) {
            
            $.ajax({
                    async: false,
                    url: "ajax/admin_prestamos_ajax.php",
                    method: "POST",
                    data: {
                        'accion': 6,
                        'nro_prestamo': nro_prestamo,
                        'pdetalle_nro_cuota': cuota,
                        'pdetalle_monto_cuota': monto
                    },
                    dataType: 'json',
                    success: function(respuesta) {


                        if (respuesta == "ok") {
                            tbl_detalle_prestamo.cell(index, 4).data(parseFloat(monto).toFixed(2)).draw(); // pasamos residuo a la siguiente letra
                            //return false;     
                        } else {
                            alert('error al ');
                        }
                    }
                });
            //tbl_detalle_prestamo.cell(index, 4).data(parseFloat(monto).toFixed(2)).draw();
            return false;

        } 
       /* else if (monto >= monto_tabla) {

            residuo = parseFloat(monto) - parseFloat(monto_tabla);
            total = parseFloat(monto_tabla) - parseFloat(residuo);

            //if(residuo <  monto_tabla){

            if (data['cuota'] == cuota_i) {

                $.ajax({
                    async: false,
                    url: "ajax/admin_prestamos_ajax.php",
                    method: "POST",
                    data: {
                        'accion': 6,
                        'nro_prestamo': nro_prestamo,
                        'pdetalle_nro_cuota': cuota_i,
                        'pdetalle_monto_cuota': total
                    },
                    dataType: 'json',
                    success: function(respuesta) {


                        if (respuesta == "ok") {
                            tbl_detalle_prestamo.cell(index, 4).data(total).draw(); // pasamos residuo a la siguiente letra
                            //return false;     
                        } else {
                            alert('error al ');
                        }
                    }
                });

            }

            return false;

        }*/
        /* else if (monto < monto_tabla) {

             residuo2 = parseFloat(monto_tabla) - parseFloat(monto);
             total2 = parseFloat(monto_tabla) + parseFloat(residuo2);

             //if(residuo <  monto_tabla){

             if (data['cuota'] == cuota_i) {

                 $.ajax({
                     async: false,
                     url: "ajax/admin_prestamos_ajax.php",
                     method: "POST",
                     data: {
                         'accion': 6,
                         'nro_prestamo': nro_prestamo,
                         'pdetalle_nro_cuota': cuota_i,
                         'pdetalle_monto_cuota': total2
                     },
                     dataType: 'json',
                     success: function(respuesta) {


                         if (respuesta == "ok") {
                             tbl_detalle_prestamo.cell(index, 4).data(total2).draw(); // pasamos residuo a la siguiente letra
                             //return false;     
                         } else {

                         }
                     }
                 });

             }
            
             return false;

         }*/





        /* else if(monto > monto_tabla  ) {

                 residuo = parseFloat(monto) - parseFloat(monto_tabla);
                 total = parseFloat(monto_tabla) - parseFloat(residuo);

                     if(residuo <  monto_tabla){

                             if (data['cuota'] ==  cuota_i) {

                                 $.ajax({
                                         async: false,
                                         url: "ajax/admin_prestamos_ajax.php",
                                         method: "POST",
                                         data: {
                                             'accion': 6,
                                             'nro_prestamo' : nro_prestamo,
                                             'pdetalle_nro_cuota': cuota_i,
                                             'pdetalle_monto_cuota': total
                                         },
                                         dataType: 'json',
                                         success: function(respuesta) { 


                                             if (respuesta == "ok") {
                                                 tbl_detalle_prestamo.cell(index, 4).data(total).draw(); // pasamos residuo a la siguiente letra
                                                 //return false;     
                                             } else{
                                                     
                                                 }
                                         }
                                     });

                             }
                         else {
                                 alert('las cuotas no coinciden');
                             }

                     }else {
                     // alert('no se puede pagar otra letra con ese monto ');
                     }

                 } */





        /*if(data['estado'] == "pendiente"){
            for (let i = 0; i < cuotas_pend; i++) {
                Nuevomonto = (parseFloat(monto) * data['precio_venta_producto'].replaceAll("S./ ", "")) .toFixed(2);
            NuevoPrecio = "S./ " + NuevoPrecio;
            table.cell(index, 7).data(NuevoPrecio).draw();
               
                
            }
        }*/


    });

    // RECALCULAMOS TOTALES
    // recalcularTotales();

}



/*===================================================================*/
//FUNCION PARA TRAER EL DETALLE PARA PAGAR UNA CUOTA
/*===================================================================*/
function Traer_Detalle(nro_prestamo) {
    tbl_detalle_prestamo = $("#tbl_detalle_prestamo").DataTable({
        //responsive: true,
        dom: 'Bltp',
        buttons: [{
                "extend": 'excelHtml5',
                "title": 'Reporte Cuotas',
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

        ],
        ajax: {
            url: "ajax/admin_prestamos_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 2,
                'nro_prestamo': nro_prestamo
            }, //LISTAR 
        },
        columnDefs: [{
            targets: 0,
            visible: false

        }, {
            targets: 6,
            //sortable: false,
            createdCell: function(td, cellData, rowData, row, col) {

                if (rowData[6] == 'pagada') {
                    $(td).html("<span class='badge badge-success'>pagada</span>")
                } else {
                    $(td).html("<span class='badge badge-danger'>pendiente</span>")
                }

            }
        }, {
            targets: 7, //columna 2
            sortable: false, //no ordene
            render: function(td, cellData, rowData, row, col) {

                if (rowData[6] == 'pagada') {
                    return "<center>" +
                        "<span class='text-secondary px-1 disabled'  data-bs-toggle='tooltip' data-bs-placement='top' > " +
                        "<i class='fas fa-hand-holding-usd fs-6'></i> " +
                        "</span> " +
                        "<span class='btnImprimirRecibo text-primary px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Imprimir Ticket'> " +
                        "<i class='far fa-file-alt fs-6'> </i> " +
                        "</span>" +
                        "<span class='EnviarCorreoCuotaP text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Enviar Recibo por Correo'> " +
                        "<i class='fas fa-envelope fs-6'> </i> " +
                        "<span class=' text-info px-1' disabled data-bs-toggle='tooltip' data-bs-placement='top' > " +
                              "<i class='fas fa-comment-dollar fs-6'> </i> " +
                              "</span>" +
                        "</span>" +
                        "</center>"
                } else if (rowData[5] == 0) {
                    return "<center>" +
                        "<span class='text-secondary px-1 disabled'  data-bs-toggle='tooltip' data-bs-placement='top' > " +
                        "<i class='fas fa-hand-holding-usd fs-6'></i> " +
                        "</span> " +
                        "<span class=' text-secondary px-1 disabled'  data-bs-toggle='tooltip' data-bs-placement='top' title='Imprimir Ticket'> " +
                        "<i class='far fa-file-alt fs-6'> </i> " +
                        "</span>" +
                        "<span class='EnviarCorreoCuotaP text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Enviar Recibo por Correo'> " +
                        "<i class='fas fa-envelope fs-6'> </i> " +
                        "</span>" +
                        "<span class=' text-info px-1' disabled data-bs-toggle='tooltip' data-bs-placement='top' > " +
                              "<i class='fas fa-comment-dollar fs-6'> </i> " +
                              "</span>" +
                        "</center>"
                } else {
                    return "<center>" +
                        "<span class='btnPagarCuta text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Pagar Cuota'> " +
                        "<i class='fas fa-hand-holding-usd fs-6'></i> " +
                        "</span> " +
                        "<span class=' text-secondary px-1' data-bs-toggle='tooltip' data-bs-placement='top' > " +
                        "<i class='far fa-file-alt fs-6'> </i> " +
                        "</span>" +
                        "<span class='btndiasMora text-info px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Calcular mora' > " +
                        "<i class='fas fa-comment-dollar fs-6'> </i> " +
                         "</span>" +
                        "</center>"
                }
            }
        }],
        lengthMenu: [5, 10, 15, 20, 50],
        pageLength: 10,

        "language": idioma_espanol,
        select: true
    });
}


/*===================================================================*/
//FUNCION PARA CARGAR CANTIDAD DE CUOTAS PAGADAS
/*===================================================================*/
function CargarCantCuotasPagadas() {
    var nro_prestamo = $('#text_nro_prestamo_d').val();
    //console.log(nro_prestamo);

    $.ajax({
        async: false,
        url: "ajax/admin_prestamos_ajax.php",
        method: "POST",
        data: {
            'accion': 4,
            'nro_prestamo': nro_prestamo
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log(respuesta);

            pdetalle_estado_cuota = respuesta["pdetalle_estado_cuota"];
            pendiente = respuesta["pendiente"];
            monto_cuotas_pagadas = respuesta["monto_c_pagadas"];
            $("#text_cuotas_pagadas__d").val(pdetalle_estado_cuota);
            $("#text_monto_pagado").val(monto_cuotas_pagadas);

            if (pendiente == 0) {

                $("#btnLiquidar").attr('hidden', true); // ocultar
            } else {
                $("#btnLiquidar").attr('hidden', false); //mostrando
            }
        }
    });
}


/*===================================================================*/
//FUNCION PARA LIQUIDAR TOTALMENTE EL PRESTAMO
/*===================================================================*/
function LiquidarCuotas() {
    var count = 0;
    var nro_prestamo = $("#text_nro_prestamo_d").val();

    var arreglo_cuota = new Array();

    $("#tbl_detalle_prestamo tbody tr").each(function(i, e) {
        arreglo_cuota.push($(this).find('td').eq(1).text());
        count++;
    })

    var pdetalle_nro_cuota = arreglo_cuota.toString();
    console.log(pdetalle_nro_cuota);

    Swal.fire({
        title: 'Esta seguro que desea liquidar totalmente el prestamo"' + nro_prestamo + '" ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Liquidar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {

        if (result.isConfirmed) {
            $.ajax({
                //url: "ajax/admin_prestamos_ajax.php",
                method: "POST",
                data: {
                    accion: 5,
                    nro_prestamo: nro_prestamo,
                    pdetalle_nro_cuota: pdetalle_nro_cuota
                },
                async: true,
                //   cache: false,
                //   contentType: false,
                //   processData: false,
                dataType: 'json',
                success: function(respuesta) {

                    console.log(respuesta);


                    if (respuesta == "ok") {

                        Toast.fire({
                            icon: 'success',
                            title: 'Prestamo Liquidado Correctamente '
                            // title: titulo_msj
                        });
                        CargarCantCuotasPagadas();

                        tbl_detalle_prestamo.ajax.reload(); //recargamos el datatable
                        tbl_ls_prestamos.ajax.reload();

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Error al Liquidar Prestamo'
                        });
                    }



                }
            });


        }


    })

}

//   function NumerosEnter(event) {
//     let charCode = (event.which) ? event.which : event.keyCode;
//     if (charCode > 31 && (charCode < 48 || charCode > 57)) {
//     event.preventDefault();
//     }
//     }




//CALULAR DIAS DE MORA 
function monto_mora(nro_prestamo, cuota) {

$.ajax({
    async: false,
    url: "ajax/admin_prestamos_ajax.php",
    method: "POST",
    data: {
        'accion': 9,
        'nro_prestamo': nro_prestamo,
        'pdetalle_nro_cuota': cuota
    },
    dataType: 'json',
    success: function(respuesta) {
        //console.log(respuesta);

        diasmora = respuesta["dias_mora"];

        $("#text_dias_mora").val(diasmora);


    }
});

}



function sinSimbolo(e) {
    const key = e.keyCode || e.which;
    if (key === 45) { // Código ASCII para -
        e.preventDefault();
    }
}

/*===================================================================*/
//PREVIEW DE LA IMAGEN
/*===================================================================*/
function previewFile2(input) {
    var file = $("input[type=file]").get(0).files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function() {

            $("#previewImg_m").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
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