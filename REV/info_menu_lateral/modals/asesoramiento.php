 <!-- INICIO DE MODAL PARA UNA NUEVA ASESORAMIENTO -->
 <div class="modal">
        <div class="modal_wrapper">
            <div class="modal_content">
                <div class="modal_head">
                    <h1 class="heading">ASESORAMIENTO</h1>
                </div>
                <div class="modal_body">
                    <div class="box">
                         <div class="listacliente">
                            <form class="form-container3" method="post" id="form_add_desti">
                                <div class="client-select-datalist">

                                </div>
                         </div>

                            <div class="inputBox">
                                <input type="text" name="correo_aseso" id="correo_aseso" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Correo</label>
                            </div>

                            <div class="inputBox">
                                <textarea name="mensaje_aseso" id="mensaje_aseso" cols="30" rows="10" style="width:100%", height="80px", border-radius="4px", border-color="#06384C"></textarea>
                                <label>Mensaje</label>
                            </div>
                            
                            <input class="add-button" id="btn_add_aseso" type="submit" value="Enviar" disabled>
                        </form>

                        <div class="modal_foot">
                            <button type="button" class="close_btn">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MODAL PARA UNA NUEVA ASESORAMIENTO -->

<script>
// BLOQUEAR BOTON DE ENVIO HASTA QUE SE INGRESE LOS CAMPOS
    $('#btn_add_aseso').attr('disabled', true);
    $('#mensaje_aseso').keyup(function() {
        if ($(this).val().length != 0) {
            $('#btn_add_aseso').attr('disabled', false);
        } else {
            $('#btn_add_aseso').attr('disabled', true);
        }
    })
</script>