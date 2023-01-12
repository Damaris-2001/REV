<!-- INICIO DE MODAL PARA UNA NUEVA ASISTENCIA -->
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
                                <input type="text" name="copy" id="copy" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Copia</label>
                            </div>

                            <div class="inputBox">
                                <input type="text" name="receiver" id="receiver" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Para</label>
                            </div>

                            <div class="inputBox">
                                <input type="text" name="park" id="park" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Parque</label>
                            </div>
                            
                            <div class="inputBox">
                                <input type="text" name="priority" id="priority" required onkeyup="this.setAttribute('value', this.value);" value="">
                                <label>Prioridad</label>
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