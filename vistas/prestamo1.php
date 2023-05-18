  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <!-- <div class="col-sm-6">
                  <h4 class="m-0">Prestamo</h4>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                      <li class="breadcrumb-item active">Prestamos</li>
                  </ol>
              </div> -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- Main content -->
  <div class="content pb-2">
      <div class="container-fluid">
          <div class="row p-0 m-0">
              <div class="col-md-12">
                  <div class="card card-info ">
                      <div class="card-header">
                          <h3 class="card-title">Registrar Prestamo</h3>

                      </div>
                      <div class=" card-body">
                          <div class="row">

                              <div class="col-md-8">
                                  <div class="card ">
                                      <div class="card-header">
                                          <h6 class="card-title">INFORMACION DEL CREDITO</h6>
                                      </div>
                                      <div class=" card-body">

                                          <!-- PARA BUSCAR EL CLIENTE -->
                                          <div class="row">
                                              <div class="col-md-8 col-10">
                                                  <div class="form-group mb-2">
                                                      <!-- <label for="" class="">

                                                          <span class="small"> Dni del Cliente</span>
                                                      </label> -->
                                                      <input type="text" name="" id="cliente_id" hidden>
                                                      <input type="text" name="" id="id_usuario" hidden>
                                                      <input type="text" name="" id="id_caja" hidden>

                                                      <input type="text" class=" form-control form-control-sm"
                                                          id="text_nro_prestamo" required disabled>

                                                  </div>
                                              </div>
                                              <div class="col-md-8 col-10">
                                                  <div class="form-group mb-2">

                                                      <input type="text" class=" form-control form-control-sm"
                                                          id="text_dni" autocomplete="off" name="text_dni"
                                                          placeholder="Dni del cliente" required>

                                                      <div class="invalid-feedback">Debe ingresar el dni del cliente
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-2">
                                                  <div class="form-group mb-2">
                                                      <!-- <label for="">&nbsp;&nbsp;</label><br> -->

                                                      <button class="btn btn-info btn-sm "id="abrirmodal_buscar_cliente" ><i
                                                              class="fas fa-search"></i></button>
                                                      <!-- <button class="btn btn-info btn-sm float-right" id="abrirmodal_registrar_cliente"><i class="fas fa-plus"></i></button><br> -->

                                                  </div>
                                              </div>
                                              <!-- <br>
                                              <br> -->

                                              <div class="col-md-8">
                                                  <div class="form-group mb-2">
                                                      <input type="text" class=" form-control form-control-sm"
                                                          id="text_nombre" name="text_nombre"
                                                          placeholder="Nombre cliente" disabled>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <input type="text" class=" form-control form-control-sm"
                                                          id="text_doc_dn" name="text_doc_dn" placeholder="Documento"
                                                          disabled>
                                                  </div>
                                              </div>

                                          </div>

                                          <br>
                                          <hr>
                                          <h5 style="text-align:center;">Informacion del Prestamo</h5>
                                          <br>
                                          <!-- PARA CALCULAR LAS CUOTAS E INTERES DEL PRESTAMO -->
                                          <!-- <form class="needs-validation" novalidate>  -->
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Monto Prestamo</span>
                                                      </label>
                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_monto" min="0" step="1" placeholder="Monto Prestamo"
                                                          required>

                                                      <div class="invalid-feedback">Debe ingresar el monto del prestamo
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Interes %</span>
                                                      </label>
                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_interes" min="0" placeholder="Interes" required>

                                                      <div class="invalid-feedback">Debe ingresar el interes </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Nro Cuotas</span>
                                                      </label>
                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_cuotas" min="0" max="50" placeholder="Nro Cuotas"
                                                          required>

                                                      <div class="invalid-feedback">Debe ingresar el nro de nuotas
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">
                                                          <span class="small"> Forma Pago</span>
                                                      </label>
                                                      <select name="" id="select_f_pago"class="form-select form-select-sm"aria-label=".form-select-sm example" required></select>

                                                      <div class="invalid-feedback">Seleccione una forma de pago</div>

                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">
                                                          <span class="small">Moneda</span>
                                                      </label>
                                                      <select name="" id="select_moneda"
                                                          class="form-select form-select-sm"
                                                          aria-label=".form-select-sm example" required></select>

                                                      <div class="invalid-feedback">Seleccione una moneda</div>

                                                  </div>
                                              </div>
                                              <div class="col-md-2 ">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small">Fecha</span>
                                                      </label>
                                                      <input type="date" class=" form-control form-control-sm"
                                                          data-inputmask-alias="datetime"
                                                          data-inputmask-inputformat="dd/mm/yyyy" id="text_fecha"
                                                          required>

                                                      <div class="invalid-feedback">Debe ingresar la Fecha </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group mb-2">
                                                      <label for="">&nbsp;</label><br>

                                                      <button class="btn btn-info btn-sm float-right"
                                                          id="btnCalcular">Calcular</button>
                                                      <button class="btn btn-danger btn-sm float-right"
                                                          id="btnLimpiarCampos" hidden>Limpiar</button>
                                                  </div>
                                              </div>

                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Monto por Cuota</span>
                                                      </label>

                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_monto_por_cuota" placeholder="Monto por cuota"
                                                          disabled>
                                                      <!-- <input type="number" class=" form-control form-control-sm" id="text_calcula_m_cuota" placeholder="calcula_m_cuota" disabled> -->

                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Total Interes</span>
                                                      </label>
                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_interes_resultado" placeholder="Total interes"
                                                          disabled>

                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small"> Monto total a Pagar</span>
                                                      </label>
                                                      <input type="number" class=" form-control form-control-sm"
                                                          id="text_total_resultado" placeholder="Monto total a pagar"
                                                          disabled>

                                                  </div>
                                              </div>
                                              <div class="col-md-4" >
                                                  <div class="form-group mb-2">
                                                      <label for="" class="">

                                                          <span class="small">Monto Mora</span>
                                                      </label>
                                                      <input type="number" min="0" class=" form-control form-control-sm"
                                                          id="text_mora" placeholder="Mora"
                                                          >

                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group mb-2">
                                                      <label for="">&nbsp;</label><br>

                                                      <!-- <button class="btn btn-info btn-sm float-right"id="btnRegistrar">Registrar</button> -->
                                                      <a class="btn btn-info btn-sm float-right" id="btnRegistrar"></i>Registrar</a>
                                                  </div>
                                              </div>



                                        </div>
                                         
                                          <br>
                                          <!-- PARA EL DATATABLE  -->
                                        <div class="row">

                                              <div class="table-responsive">
                                                  <table id="tbl_prestamo" class="table-bordered display compact"
                                                      style="width: 100%">
                                                      <thead class="bg-info">
                                                          <tr>
                                                              <th>Nro. C</th>
                                                              <th>Fecha</th>
                                                              <th>Monto</th>
                                                              <!-- <th>accion</th> -->

                                                          </tr>
                                                      </thead>
                                                      <tbody id="tbody_tabla_detalle_pro">

                                                      </tbody>
                                                  </table>

                                              </div>
                                         </div>


                                      </div>


                                  </div>
                              </div>

                          </div>


                      </div>
                  </div>
              </div>
          </div>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->


  <!-- MODAL LISTAR CLIENTES-->
  <div class="modal fade" id="modal_listar_cliente" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-header bg-gray py-1 align-items-center">
                  <h6 class="modal-title" id="titulo_modal_categorias">Lista de Clientes</h6>&nbsp;&nbsp;
                  <button class="btn btn-success btn-sm " id="abrirmodal_registrar_cliente"><i
                          class="fas fa-plus"></i></button>
                  <button type="button" class="close  text-white border-0 fs-5" id="btncerrarmodal"
                      data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="table-responsive">
                      <table id="tbl_lista_cliente" class="display table-sm nowrap table-striped  w-100 ">
                          <thead class="bg-info text-left">
                              <tr>
                                  <th>Id</th>
                                  <th>Nombres</th>
                                  <th>Dni</th>
                                  <th>Prestamo</th>
                                  <th>estado</th>
                                  <!-- <th class="text-cetner">Opciones</th> -->
                              </tr>
                          </thead>
                          <tbody class="small text left">
                          </tbody>
                      </table>
                  </div>


              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                      id="btncerrar">Cerrar</button>
              </div>
          </div>
      </div>
  </div>
  <!-- fin Modal -->

  <!-- MODAL REGISTRAR CLIENTES-->
  <div class="modal fade" id="modal_registro_cliente" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-header bg-gray py-1 align-items-center">
                  <h5 class="modal-title" id="titulo_modal_cliente">Registro de Usuarios</h5>
                  <button type="button" class="close  text-white border-0 fs-5" id="btncerrarmodal_cliente"
                      data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form class="needs-validation" novalidate>
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group mb-2">
                                  <label for="" class="">
                                      <input type="text" id="id_cliente" hidden>
                                      <span class="small"> Nombres</span><span class="text-danger">*</span>
                                  </label>
                                  <input type="text" class=" form-control form-control-sm" id="text_nombres"
                                      name="text_nombres" placeholder="Nombres" required>
                                  <div class="invalid-feedback">Debe ingresar un nonbres del cliente</div>

                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group mb-2">
                                  <label for="" class="">
                                      <span class="small"> Documento</span><span class="text-danger">*</span>
                                  </label>
                                  <input type="text" class=" form-control form-control-sm" id="text_documento"
                                      name="text_documento" placeholder="Documento" required>
                                  <div class="invalid-feedback">Debe ingresar el documento del cliente</div>

                              </div>
                          </div>

                          <div class="col-lg-12">
                              <div class="form-group mb-2">
                                  <label for="" class="">
                                      <span class="small"> Celular</span><span class="text-danger">*</span>
                                  </label>
                                  <input type="text" class=" form-control form-control-sm" id="text_cel" name="text_cel"
                                      placeholder="Celular / telefono" required>
                                  <div class="invalid-feedback">Debe ingresar el celular </div>

                              </div>
                          </div>

                          <div class="col-lg-12">
                              <div class="form-group mb-2" id="iptclave">
                                  <label for="ipclave" class="">
                                      <span class="small"> Direccion</span><span class="text-danger">*</span>
                                  </label>
                                  <input type="text" class=" form-control form-control-sm" id="text_direccion"
                                      name="text_direccion" placeholder="Direccion" required>
                                  <div class="invalid-feedback">Debe ingresar una direccion</div>

                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group mb-2" id="iptclave">
                                  <label for="ipclave" class="">
                                      <span class="small"> Correo</span>
                                  </label>
                                  <input type="text" class=" form-control form-control-sm" id="text_correo"
                                      name="text_correo" placeholder="Direccion">


                              </div>
                          </div>

                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                      id="btncerrar_cliente">Cerrar</button>
                  <button type="button" class="btn btn-primary btn-sm" id="btnregistrar_cliente">Registrar</button>
              </div>
          </div>
      </div>
  </div>
  <!-- fin Modal -->

  <script>
var accion;
var tbl_prestamo, tbl_lista_cliente, fecha_emision, corre;

var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});
$(document).ready(function() {

    //fechas();
    CargarCorrelativo();
    CargarEstadoCaja();
    CargarId_Caja();
    var id_usuario = $("#text_Idprincipal").val();
    $("#id_usuario").val(id_usuario);
    $("#btnRegistrar").attr('hidden', true);

    /*************************************
     * ACTUALIZAR EN AUTOMATICO LAS TARJETAS 
     *************************************/
    //   var corre = setInterval(() => {
    //       CargarCorrelativo();

    //   }, 2000);



    /***************************************************************************
     * INICIAR DATATABLE BUSCAR CLIENTES
     ******************************************************************************/
    var tbl_lista_cliente = $("#tbl_lista_cliente").DataTable({


        ajax: {
            url: "ajax/clientes_ajax.php",
            dataSrc: "",
            type: "POST",
            data: {
                'accion': 7
            }, //LISTAR PRODUCTOS
        },
        columnDefs: [{
            targets: 4,
            visible: false

        }, {
            targets: 3,
            //sortable: false,
            createdCell: function(td, cellData, rowData, row, col) {

                if (rowData[3] == 'con prestamo') {
                    $(td).html("<span class='badge badge-warning'>CON PRESTAMO</span>")
                } else {
                    $(td).html("<span class='badge badge-success'>DISPONIBLE</span>")
                }
            }

        }],
        "order": [
            [0, 'desc']
        ],
        lengthMenu: [0, 5, 10, 15, 20, 50],
        "pageLength": 10,
        "language": idioma_espanol,
        select: true
    });


    /*===================================================================*/
    //VALIDAR SI EL DNI ESTA REGISTRADO O DESACTIVADO
    /*===================================================================*/
    $("#text_dni").change(function() {

        var document = $("#text_dni").val();

        // console.log(codBarra);
        $.ajax({
            async: false,
            url: "ajax/clientes_ajax.php",
            method: "POST",
            data: {
                'accion': 5,
                'cliente_dni': document
                //  'cantidad_a_comprar': cantidad
            },

            dataType: 'json',
            success: function(respuesta) {
                //console.log(respuesta);
                if (parseInt(respuesta['ex']) > 0) {
                    // console.log('si hay');
                    CargarDatosCliente();
                    $("#text_dni").val("");

                } else {
                    // console.log('fdgdfgdfgfd');
                    Toast.fire({
                        icon: 'error',
                        title: ' Documento ' + document + ' no esta  registrado'
                    })
                    $("#text_nombre").val("");
                    $("#text_doc_dn").val("");
                    $("#cliente_id").val("");
                    $("#text_dni").val("");
                }
            }
        });

    })


    /*===================================================================*/
    //ABRIR EL MODAL BUSCAR CLIENTES
    /*===================================================================*/
    $("#abrirmodal_buscar_cliente").on('click', function() {
        $("#modal_listar_cliente").modal({
            backdrop: 'static',
            keyboard: false
        });
        $("#modal_listar_cliente").modal('show');


    })

    /*===================================================================*/
    // ABRIR EL MODAL DE REGISTRAR CLIENTES
    /*===================================================================*/
    $("#abrirmodal_registrar_cliente").on('click', function() {
        AbrirModalRegistroCliente();
    })

    /*===================================================================*/
    //PASAR DATOS DEL DATATABLE A TEXBOX AL HACER DOBLECLICK
    /*===================================================================*/
    $(document).on('dblclick', '#tbl_lista_cliente tr', function(event) {

        let disponible = $(this).find("td").eq(3).html();

        //console.log(disponible);

       // if (disponible == '<span class="badge badge-success">DISPONIBLE</span>') {
            let idCliente = $(this).find("td").eq(0).html();
            let nombres = $(this).find("td").eq(1).html();
            let dni = $(this).find("td").eq(2).html();


            $("#text_nombre").val(nombres);
            $("#text_doc_dn").val(dni);
            $("#cliente_id").val(idCliente);
            $("#modal_listar_cliente").modal('hide');

        // } else {
        //     Toast.fire({
        //         icon: 'warning',
        //         title: 'Cliente Tiene un prestamo Pendiente, Revisar'

        //     });
            //   $("#text_nombre").val('');
            //   $("#text_doc_dn").val('');
            //   $("#cliente_id").val('');
            //   $("#modal_listar_cliente").modal('hide');

       // }



    })

    /*===================================================================*/
    // CALCULOS AUTOMATICOS EN LOS TEXBOX
    /*===================================================================*/
    $("#text_cuotas").change(function() {
        recalcularPrestamo();
    });

    /*===================================================================*/
     //EVITAR DECIMALES
    /*===================================================================*/
    $('#text_cuotas').on('input', function () {
        this.value = this.value.replace(/[^0-9,]/g, '').replace(/,/g, '.');
    });

    /*===================================================================*/
    //CALCULOS PARA LAS CAJAS DE TEXTO -  CREAR FILAS DEL DATATABLE
    /*===================================================================*/
    $("#btnCalcular").on('click', function() {
        var interes = 0;
        var cuota = $("#text_cuotas").val();
        var monto = $("#text_monto").val();
        var interes = $("#text_interes").val();
        var moneda = $("#select_moneda").val();
        var fpago = $("#select_f_pago").val();
        var fecha = $("#text_fecha").val();
        var montocuota = $("#text_monto_por_cuota").val();
        var cliente = $("#text_doc_dn").val();

        

        if (monto == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar un monto a prestar'

            });
            $("#text_monto").focus();
        } else if (parseInt(monto )<1) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'El monto debe ser mayor a 0'
                        });
                        $("#text_monto").focus();
                      
     	} else if (parseInt(interes )<1) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'El Interes debe ser mayor a 0'
                        });
                        $("#text_interes").focus();
                      
     	} else if (parseInt(cuota )<1) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'Nro de Cuotas debe ser mayor a 0'
                        });
                        $("#text_cuotas").focus();
                      
     	} else if (interes == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar el interes'

            });
            $("#text_interes").focus();
        } else if (cuota == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar una cuota'

            });
            $("#text_cuotas").focus();
        } else if (fpago == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar una forma de pago'

            });
            $("#select_f_pago").focus();
        } else if (moneda == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar una moneda'

            });
            $("#select_moneda").focus();
        } else if (cliente == "") {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar un Cliente'

            });
            $("#text_doc_dn").focus();
        } else if (fecha == 0) {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar una fecha'

            });
            $("#text_fecha").focus();

        }
        //   else if (cuota >=12 ) {
        //       Toast.fire({
        //           icon: 'warning',
        //           title: 'Maximo 12 cuotas'

        //       });
        //       $("#text_cuotas").focus();
        //   } 
        else {

            recalcularPrestamo();
            $("#btnRegistrar").attr('hidden', false);
            $("#btnLimpiarCampos").attr('hidden', false);
            $("#btnCalcular").attr('hidden', true);


            var i = 0;
            var count = 1;
            let element = {};
            var cant1 = 0;
            //var residuo = (montoPresta % cuota);

            var nFilas = $("#tbody_tabla_detalle_pro tbody tr").length;
            // alert(nFilas);
            if (nFilas >= 0) {
                nFilas = count;
            }

            let fechas = [];
            let fechaActual = Date.now();
            let mes_actual = moment(fecha);
            let diario = moment(fecha);
            let semanal = moment(fecha);
            let quincenal = moment(fecha);
            let bimestral = moment(fecha);
            let trimestral = moment(fecha);
            let semestral = moment(fecha);
            let anual = moment(fecha);
            //mes_actual.add(1, 'month'); ´7 calcular despues de un mes


            for (var i; i < cuota; i++) {
                //Formato fechas

                if (fpago == 1) { // DIARIO
                    //fechas[i] = diario.format('DD-MM-YYYY');
                    fechas[i] = diario.format('YYYY-MM-DD');
                    diario.add(1, 'days');


                } else if (fpago == 2) { // SEMANAL
                    fechas[i] = semanal.format('YYYY-MM-DD');
                    semanal.add(1, 'week');

                } else if (fpago == 3) { // QUINCENAL
                    fechas[i] = quincenal.format('YYYY-MM-DD');
                    quincenal.add(+14, 'days');

                } else if (fpago == 4) { // MENSUAL
                    fechas[i] = mes_actual.format('YYYY-MM-DD');
                    mes_actual.add(1, 'month');

                } else if (fpago == 5) { // BIMESTRAL
                    fechas[i] = bimestral.format('YYYY-MM-DD');
                    bimestral.add(+2, 'month');

                } else if (fpago == 6) { // SEMESTRAL
                    fechas[i] = semestral.format('YYYY-MM-DD');
                    semestral.add(+6, 'month');

                } else if (fpago == 7) { // ANUAL
                    fechas[i] = anual.format('YYYY-MM-DD');
                    anual.add(1, 'year');

                } else {
                    console.log('sdf')

                }

                let datos_agregar = "<tr id='" + count + "'>"; 
                datos_agregar = datos_agregar + "<td for='id'> " + count++; + "</td>";
                datos_agregar = datos_agregar + "<td>" + fechas[i] + "</td>";
                datos_agregar = datos_agregar + "<td>" + montocuota + "</td>";
                datos_agregar = datos_agregar + "</tr>";
                $("#tbody_tabla_detalle_pro").append(datos_agregar);

                cant1 = parseFloat(cant1) + parseFloat(montocuota);

            }

        }


    })


    /*===================================================================*/
     //PARA ELIMINAR UN ITEM DEL DATATABLE
    /*===================================================================*/
    var tid = "";
    $(document).on('click', '.remove2', function(event) {
        //tid = $('#tbl_listadoCu tbody tr').attr('id');
        tid = $(this).parents('tr').attr('id');


        var opcion = confirm('fila seleccionada: ' + tid);
        if (opcion == true) {
            $('#' + tid).remove();
        } else {

        }
    });



    /*===================================================================*/
      //LIMPIAR CAMPOS
    /*===================================================================*/
    $("#btnLimpiarCampos").on('click', function() {
        LimpiarInputs();
        //fechas();
        $('#tbl_prestamo').DataTable().clear().destroy();

        $("#btnLimpiarCampos").attr('hidden', true);
        $("#btnCalcular").attr('hidden', false);
        $("#btnRegistrar").attr('hidden', true);
    })




    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR MONEDA EN COMBO
    /*===================================================================*/
    $.ajax({
        url: "ajax/moneda_ajax.php",
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

            var options = '<option selected value="">Seleccione una moneda</option>';

            for (let index = 0; index < respuesta.length; index++) {
                options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][
                    1
                ] + '</option>';

            }

            $("#select_moneda").append(options);

        }
    });

    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR FORMA DE PAGO EN COMBO
    /*===================================================================*/
    $.ajax({
        url: "ajax/fpago_ajax.php",
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {
           // console.log(respuesta);

            var options = '<option selected value="">Seleccione una forma de pago</option>';
            // var options = '';

            for (let index = 0; index < respuesta.length; index++) {
                options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1 ] + '</option>';

            }

            $("#select_f_pago").append(options);



        }
    });

    /*===================================================================*/
    //REGISTRAR CLIENTE
    /*===================================================================*/
    document.getElementById("btnregistrar_cliente").addEventListener("click", function() {

        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {

            //si se ingresan todos los datos 
            if (form.checkValidity() === true) {

                Swal.fire({
                    title: 'Esta seguro de Registrar el Cliente?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {

                        var datos = new FormData();

                        datos.append("accion", accion);
                        datos.append("cliente_id", $("#id_cliente").val()); //id
                        datos.append("cliente_nombres", $("#text_nombres")
                    .val()); //modulo
                        datos.append("cliente_dni", $("#text_documento").val());
                        datos.append("cliente_cel", $("#text_cel").val());
                        datos.append("cliente_direccion", $("#text_direccion").val());
                        datos.append("cliente_correo", $("#text_correo").val());


                        $.ajax({
                            url: "ajax/clientes_ajax.php",
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
                                        title: 'El Cliente se registro de forma correcta'

                                    });

                                    tbl_lista_cliente.ajax
                                .reload(); //recargamos el datatable 

                                    $("#modal_registro_cliente").modal(
                                        'hide');

                                    $("#id_cliente").val("");
                                    $("#text_nombres").val("");
                                    $("#text_documento").val("");
                                    $("#text_cel").val("");
                                    $("#text_direccion").val("");
                                    $("#text_correo").val("");


                                    $(".needs-validation").removeClass(
                                        "was-validated");

                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Cliente no se pudo registrar'
                                    });
                                }

                            }
                        });
                    }
                })


            } else {
                //console.log(" ") //No paso la validacion
            }

            form.classList.add('was-validated');


        });
    });



    /*===================================================================*/
    //DUPLICADO DE DOCUMENTOS
    /*===================================================================*/
    $("#text_monto").change(function() {
        CargarMontoaPrestar();
    })



    /*======================================================================================
    // LIMPIAR CAJAS DE TEXTO AL CERRAR LA VENTANA MODAL DEL REGISTRO
    /* =========================================================================================*/
    $("#btncerrarmodal_cliente, #btncerrar_cliente").on('click', function() {
        $("#id_cliente").val("");
        $("#text_nombres").val("");
        $("#text_documento").val("");
        $("#text_cel").val("");
        $("#text_direccion").val("");
        $("#text_correo").val("");
    })

    /*===================================================================*/
    //LIMPIA LOS MENSAJES DE ALERTA DE INGRESO DE DATOS DE CADA INPUT AL CANCELAR LA VENTANA MODAL
    /*===================================================================*/
    document.getElementById("btncerrar_cliente").addEventListener("click", function() {
        $(".needs-validation").removeClass("was-validated");
    })
    document.getElementById("btncerrarmodal_cliente").addEventListener("click", function() {
        $(".needs-validation").removeClass("was-validated");
    })

    /*===================================================================*/
     //HACER CLICK EN BOTON REGISTRAR PRESTAMO
    /*===================================================================*/
   
    $("#btnRegistrar").on('click', function() {
        var mora = $("#text_mora").val();

        if (parseInt(mora )<1) {
                Toast.fire({
                    icon: 'warning',
                    title: 'El monto de la mora debe ser mayor a 0'
                });
                $("#text_mora").focus();
                
     	    }else {
                    RegistarPrestamo()
                    $("#btnLimpiarCampos").attr('hidden', true);
                    $("#btnCalcular").attr('hidden', false);
                    $("#btnRegistrar").attr('hidden', true);
         }
    })

}) /// FIN DOCUMENT READY         



///////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////////////////////////////////////////////////////////





function recalcularPrestamo() {
    monto_interes = 0;
    cociente = 0;
    residuo = 0;

    var montoPresta = parseFloat($("#text_monto").val());
    var interes = parseFloat($("#text_interes").val());
    var cuota = parseFloat($("#text_cuotas").val());
    //  console.log(montoPresta,interes,cuota);
    var credito = montoPresta

    var monto_interes = (montoPresta * interes) / 100; //500 *0.20
    
    console.log(monto_interes);
    montoPresta += parseFloat(monto_interes);

    var cociente = (monto_interes * cuota);
    residuo = (cociente - credito);

     $("#text_monto_por_cuota").val(parseFloat(monto_interes).toFixed(2));
    $("#text_interes_resultado").val(parseFloat(residuo).toFixed(2));
   
    $("#text_total_resultado").val(parseFloat(cociente).toFixed(2));

}


/*===================================================================*/
//FUNCION PARA CARGAR DATOS DEL CLIENTE EN TEXBOX
/*===================================================================*/
function CargarDatosCliente(dni = "") {

    if (dni != "") {
        var cliente_dni = dni;

    } else {
        var cliente_dni = $("#text_dni").val();
    }

    $.ajax({
        ///async: false,
        url: "ajax/clientes_ajax.php",
        method: "POST",

        data: {
            'accion': 6,
            'cliente_dni': cliente_dni

        },
        dataType: 'json',
        success: function(respuesta2) {

            //console.log(respuesta2);

            cliente_id = respuesta2["cliente_id"];
            cli_doc = respuesta2["cliente_dni"];
            cliente_nombres = respuesta2["cliente_nombres"];
            //   console.log(cli_doc);
            //  cliente_estado_prestamo = respuesta["cliente_estado_prestamo"];



            $("#cliente_id").val(cliente_id);
            $("#text_nombre").val(cliente_nombres); //SETEAMOS EN LOS TEXTBOX
            $("#text_doc_dn").val(cli_doc);
            //   $("#text_direccion").val(cliente_estado_prestamo);

        }
    });
}


/*===================================================================*/
//REGISTRAR CABECERA DEL PRESTAMO
/*===================================================================*/
function RegistarPrestamo() {

    var count = 0;
    var nro_prestamo = $("#text_nro_prestamo").val();
    var cliente_id = $("#cliente_id").val();
    var id_usuario = $("#id_usuario").val();
    var pres_monto = $("#text_monto").val();
    var pres_interes = $("#text_interes").val();
    var pres_cuotas = $("#text_cuotas").val();
    var fpago_id = $("#select_f_pago").val();
    var moneda_id = $("#select_moneda").val();
    var pres_f_emision = $("#text_fecha").val();

    var pres_monto_cuota = $("#text_monto_por_cuota").val();
    var pres_monto_interes = $("#text_interes_resultado").val();
    var pres_monto_total = $("#text_total_resultado").val();
    var caja_id = $("#id_caja").val();
    var mora = $("#text_mora").val();

       

    //para validar que el detalle tenga un dato

    $("#tbl_prestamo  tbody  tr ").each(function(i, e) {
        count = count + 1; //cuenta las filas 
    })
    // alert(count);

    if (count > 0) { //SI HAY DATOS AGREGADOS EN EL DETALLE
        if (cliente_id > 0) {

            var formData = new FormData();

            //PARA LA CABECERA
            formData.append("accion", 1);
            formData.append('nro_prestamo', nro_prestamo); //declaramos y capturamos arriba
            //formData.append('descripcion_venta', 'Prestamo:  ' + nro_boleta);
            formData.append('cliente_id', cliente_id);
            formData.append('pres_monto', parseFloat(pres_monto));
            formData.append('pres_cuotas', pres_cuotas);
            formData.append('pres_interes', pres_interes);
            formData.append('fpago_id', fpago_id);
            formData.append('moneda_id', moneda_id);
            formData.append('pres_f_emision', pres_f_emision);
            formData.append('pres_monto_cuota', parseFloat(pres_monto_cuota));
            formData.append('pres_monto_interes', parseFloat(pres_monto_interes));
            formData.append('pres_monto_total', parseFloat(pres_monto_total));
            formData.append('id_usuario', id_usuario);
            formData.append('caja_id', caja_id);
            formData.append('pres_mora', mora);




            $.ajax({
                url: "ajax/prestamo_ajax.php",
                method: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta) {
                    //console.log(respuesta);

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: respuesta,
                        showConfirmButton: false,
                        timer: 1500
                    })


                    RegistrarDetalle();

                    LimpiarInputs();

                    CargarCorrelativo();
                    fechas();

                    $('#tbl_prestamo').DataTable().clear().destroy();
                    //  $('#tbl_lista_cliente').ajax.reload(); //recargamos el datatable 


                }
            });
        } else {
            Toast.fire({
                icon: 'warning',
                title: 'Debe ingresar un cliente '

            });
            $("#btnRegistrar").attr('hidden', false);
        }




    } else {

        Toast.fire({
            icon: 'warning',
            title: 'No hay nada en el detalle'
        });

    }

    // $("#iptCodigoVenta").focus();

} /* FIN registrar prestamo */



/*===================================================================*/
//FUNCION PARA GUARDAR DETALLE DEL PRESTAMO
/*===================================================================*/
function RegistrarDetalle() {
    var count = 0;
    var nro_prestamo = $("#text_nro_prestamo").val();


    var arreglo_cuota = new Array();
    var arreglo_fecha = new Array();
    var arreglo_monto = new Array();

    $("#tbl_prestamo tbody tr").each(function(i, e) {
        arreglo_cuota.push($(this).find('td').eq(0).text());
        arreglo_monto.push($(this).find('td').eq(2).text());
        arreglo_fecha.push($(this).find('td').eq(1).text());
        count++;
    })

    var pdetalle_nro_cuota = arreglo_cuota.toString();
    var pdetalle_monto_cuota = arreglo_monto.toString();
    var pdetalle_fecha = arreglo_fecha.toString();

    // console.log(arreglo_fecha);


    $.ajax({
        url: "ajax/prestamo_ajax.php",
        method: "POST",
        data: {
            accion: 2,
            nro_prestamo: nro_prestamo,
            pdetalle_nro_cuota: pdetalle_nro_cuota,
            pdetalle_monto_cuota: pdetalle_monto_cuota,
            pdetalle_fecha: pdetalle_fecha

        },
        //   cache: false,
        //   contentType: false,
        //   processData: false,
        dataType: 'json',
        success: function(respuesta) {
            // console.log(respuesta);


            //   Swal.fire({
            //       position: 'center',
            //       icon: 'success',
            //       title: respuesta,
            //       showConfirmButton: false,
            //       timer: 1500
            //   })



        }
    });

}


function fechas() {
    var f = new Date();
    var anio = f.getFullYear();
    var mes = f.getMonth() + 1;
    var d = f.getDate();
    if (d < 10) {
        d = '0' + d;
    }
    if (mes < 10) {
        mes = '0' + mes;
    }

    document.getElementById('text_fecha').value = anio + "-" + mes + "-" + d;
}



function AbrirModalRegistroCliente() {
    //para que no se nos salga del modal haciendo click a los costados
    $("#modal_registro_cliente").modal({
        backdrop: 'static',
        keyboard: false
    });
    $("#modal_registro_cliente").modal('show'); //abrimos el modal
    $("#titulo_modal_cliente").html('Registrar Cliente');
    $("#btnregistrar_cliente").html('Registrar');
    accion = 2; // guardar
    //titulo_modal = "Registrar";
}

/*===================================================================*/
//FUNCION PARA CARGAR CORRELATIVO
/*===================================================================*/
function CargarCorrelativo() {

    $.ajax({
        async: false,
        url: "ajax/configuracion_ajax.php",
        method: "POST",
        data: {
            'accion': 3
        },
        dataType: 'json',
        success: function(respuesta) {
           // console.log(respuesta);

            nro_prestamo = respuesta["nro_prestamo"];


            $("#text_nro_prestamo").val(nro_prestamo);
        }
    });
}

/*===================================================================*/
//FUNCION PARA CARGAR TRAER EL ID CAJA
/*===================================================================*/
function CargarId_Caja() {

    $.ajax({
        async: false,
        url: "ajax/caja_ajax.php",
        method: "POST",
        data: {
            'accion': 6
        },
        dataType: 'json',
        success: function(respuesta) {

            caja_id = respuesta["caja_id"];


            $("#id_caja").val(caja_id);
        }
    });
}


/*===================================================================*/
//SI ESTA APERTURADA O NO UNA CAJA
/*===================================================================*/
function CargarEstadoCaja() {

    $.ajax({
        async: false,
        url: "ajax/caja_ajax.php",
        method: "POST",
        data: {
            'accion': 5
        },
        dataType: 'json',
        success: function(respuesta) {
            //console.log(respuesta);

            caja_estado = respuesta["caja_estado"];
            //console.log(caja_estado);
            // $("#text_correo").val(email);

            if (caja_estado == 'VIGENTE') {

            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Mensaje de Error',
                    text: 'Debe aperturar una caja, se redireccionara a la ventana',
                    showConfirmButton: false,
                    //timer: 1500
                })

                $("#btnCalcular").attr('hidden', true);
                $("#text_monto").attr('disabled', true);
                $("#text_interes").attr('disabled', true);
                $("#text_cuotas").attr('disabled', true);
                $("#select_f_pago").attr('disabled', true);
                $("#select_moneda").attr('disabled', true);
                $("#text_fecha").attr('disabled', true);
                //$("#CargarContenido").load('vistas/caja.php','content-wrapper');
                CargarContenido('vistas/caja.php', 'content-wrapper');
            }
        }
    });
}

/*===================================================================*/
//FUNCION PARA VALIDAR EL MONTO A PRESTAR CON LO QUE TENEMOS EN CAJA
/*===================================================================*/
function CargarMontoaPrestar() {
    $.ajax({
        async: false,
        url: "ajax/prestamo_ajax.php",
        method: "POST",
        data: {
            'accion': 3
        },
        dataType: 'json',
        success: function(respuesta) {

            pres_monto = respuesta["pres_monto"];
            monto_inicial_caja = respuesta["monto_inicial_caja"];
            ingreso = respuesta["ingreso"];
            egreso = respuesta["egreso"];
            interes = respuesta["interes"];

            var montonuevoprestamo = $("#text_monto").val();
            ope = (parseFloat(monto_inicial_caja) + parseFloat(ingreso) + parseFloat(interes) - parseFloat(
                egreso));
            montodelprestamo = (parseFloat(ope - pres_monto).toFixed(2));

            //ejm = (parseFloat(montonuevoprestamo - montodelprestamo).toFixed(2));

            //console.log(ope);
            //console.log(montodelprestamo);
            //console.log(ejm);

            if (parseFloat(montonuevoprestamo) <= montodelprestamo) {
               // console.log();
            } else {
                Toast.fire({
                    icon: 'error',
                    title: ' El monto:  ' + montonuevoprestamo +
                        ' supera lo que hay en caja, Saldo:  ' + montodelprestamo
                })
                // $("#text_monto").val("");
                LimpiarInputs();
            }


        }
    });
}




function LimpiarInputs() {
    // $("#text_nro_prestamo").val("");
    $("#cliente_id").val("");
    $("#text_nombre").val("");
    $("#text_doc_dn").val("");
    $("#text_monto").val("");
    $("#text_interes").val("");
    $("#text_cuotas").val("");
    $("#select_f_pago").val("");
    $("#select_moneda").val("");
    $("#text_fecha").val("");

    $("#text_monto_por_cuota").val("");
    $("#text_interes_resultado").val("");
    $("#text_total_resultado").val("");
    $("#text_mora").val("");

    $("#text_dni").focus();

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