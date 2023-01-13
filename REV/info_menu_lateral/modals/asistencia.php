 <!-- INICIO DE MODAL PARA UNA NUEVA ASISTENCIA -->
    <div class="modal">
        <div class="modal_wrapper">
            <div class="modal_content">
                <div class="modal_head">
                    <h1 class="heading">ASISTENCIA TECNICA</h1>
                </div>
                <div class="modal_body">
                    <div class="box">
                         <div class="listacliente">
                            <form action="enviar.php" method="post" id="form_add_asis">
                                <div class="client-select-datalist">

                                </div>
                         </div>

                            <div class="inputBox">
                                <input type="text" name="correo" id="correo" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Correo</label>
                            </div>

                            <div class="inputBox">
                                <textarea name="mensaje" id="mensaje" cols="30" rows="10" style="width:100%", height="80px"></textarea>
                                <label>Mensaje</label>
                            </div>
                            
                            <input class="add-button" id="btn_add_asis" type="submit" value="Enviar" disabled>
                        </form>

                        <div class="modal_foot">
                            <button type="button" class="close_btn">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MODAL PARA UNA NUEVA ASISTENCIA -->

<script>
// Bloquear boton de añadir hasta que se ingrese los campos
    $('#btn_add_asis').attr('disabled', true);
    $('#mensaje').keyup(function() {
        if ($(this).val().length != 0) {
            $('#btn_add_asis').attr('disabled', false);
        } else {
            $('#btn_add_asis').attr('disabled', true);
        }
    })

    // Agrega la url de soporte a la base de datos
    $('#btn_add_asis').click(function() {
        let form_add_desti = $('#form_add_desti').serialize();
        $.ajax({
            type: "POST",
            url: "new.php?case=1",
            data: form_add_desti,
            dataType: "html",
            error: function() {
                swal("Error", "Error en la peticion", "error");
                
            },
            success: function(data) {
                let datos = data.replace(/<[^>]*>?/gm, '');
                if (datos.includes("correcto")){
                    swal("Success", "Datos guardados correcramente", "success");
                    $('#select-box').val(0);
                    $('#copy').val("");
                    $('#receiver').val("");
                    $('#park').val("");
                    $('#priority').val("");
                    $('#btn_add_asis').attr('disabled', true);
                }else if (datos.includes("insert fail")){
                    swal("Info", "Llenar los campos correctamente", "info");
                    
                }
                else{
                    swal("Info", "Llenar los campos correctamente", "info");

                }
            }
        });
        return false;
    });
</script>