 <!-- INICIO DE MODAL PARA UNA NUEVA ASISTENCIA -->
    <div class="modal">
        <div class="modal_wrapper">
            <div class="modal_content">
                <div class="modal_head">
                    <h1 class="heading">ASISTENCIA</h1>
                </div>
                <div class="modal_body">
                    <div class="box">
                         <div class="listacliente">
                            <form class="form-container3" method="post" id="form_add_desti">
                                <div class="client-select-datalist">

                                </div>
                         </div>

                            <div class="inputBox">
                                <input type="text" name="correo" id="correo" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Correo</label>
                            </div>

                            <div class="inputBox">
                                <textarea name="mensaje" id="mensajec" cols="30" rows="10" style="width:100%", height="80px"></textarea>
                                <label>Mensaje</label>
                            </div>
                            
                            <input class="add-button" id="btn_add_desti" type="submit" value="Enviar" disabled>
                        </form>

                        <div class="modal_foot">
                            <button type="button" class="close_btn">Cancelar</button>
                            
                            <!-- Div en donde se muestra el resultado de la consulta -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MODAL PARA UNA NUEVA ASISTENCIA -->