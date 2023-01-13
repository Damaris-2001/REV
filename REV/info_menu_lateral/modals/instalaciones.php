 <!-- INICIO DE MODAL PARA UNA NUEVA INSTALACION -->
 <div class="modal">
        <div class="modal_wrapper">
            <div class="modal_content">
                <div class="modal_head">
                    <h1 class="heading">INSTALACIONES</h1>
                </div>
                <div class="modal_body">
                    <div class="box">
                         <div class="listacliente">
                            <form class="form-container3" method="post" id="form_add_desti">
                                <div class="client-select-datalist">

                                </div>
                         </div>

                            <div class="inputBox">
                                <input type="text" name="correo_insta" id="correo_insta" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Correo</label>
                            </div>

                            <div class="inputBox">
                                <textarea name="mensaje_insta" id="mensaje_insta" cols="30" rows="10" style="width:100%", height="80px"></textarea>
                                <label>Mensaje</label>
                            </div>
                            
                            <input class="add-button" id="btn_add_insta" type="submit" value="Enviar" disabled>
                        </form>

                        <div class="modal_foot">
                            <button type="button" class="close_btn">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MODAL PARA UNA NUEVA INSTALACIONES -->

<script>
// BLOQUEAR BOTON DE ENVIO HASTA QUE SE INGRESE LOS CAMPOS
    $('#btn_add_insta').attr('disabled', true);
    $('#mensaje_insta').keyup(function() {
        if ($(this).val().length != 0) {
            $('#btn_add_insta').attr('disabled', false);
        } else {
            $('#btn_add_insta').attr('disabled', true);
        }
    })
</script>