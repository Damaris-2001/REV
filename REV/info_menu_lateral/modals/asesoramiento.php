<!DOCTYPE html>
<html lang="en">

<body>
    <!-- INICIO DE MODAL PARA UNA NUEVA ASISTENCIA -->
    <div class="modal">
        <div class="modal_wrapper">
            <div class="modal_content">
                <div class="modal_head">
                    <h1 class="heading">Asistencia</h1>
                </div>
                <div class="modal_body">
                    <div class="box">
                         <div class="listacliente">
                            <form class="form-container3" method="post" id="form_add_desti">
                                <div class="client-select-datalist">
                                    <select data-select id="select-box" name="id_client" >
                                        <option value="0">-- seleccionar cliente --</option>
                                        <?php
                                        $result = mysqli_query($conexion, "select * from clients order by client_name asc");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?><option value="<?php echo $row['id_client'] ?>"> <?php echo $row['client_name'] ?> </option>
                                            <?php
                                        } ?>
                                    </select>0
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
                            <div id="result_add_desti"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MODAL PARA UNA NUEVA ASISTENCIA -->
</body>